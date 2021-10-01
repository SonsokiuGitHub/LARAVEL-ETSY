export function validator (formSelector, formGroupSelector, formMessageSelector){
    const _this = this;
    // lấy ra form Element trong DOM theo formSelector
    const formElement = document.querySelector(formSelector);
    const formRules = {};
    // qui ước tạo rules:
    // nếu có lỗi return 'message error'
    // không có lỗi return 'undefined'
    const validatorRules = {
        required(value){
            return value ? undefined : 'vui lòng nhập trường này';
        },
        email(value){
            const regex =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return (regex.test(value)) ? undefined : 'trường này phải là email'
        },
        min(min){
            return function(value){
                return (value.length >= min) ? undefined : `vui lòng nhập tổi thiếu ${min} kí tự` 
            }
        },
        max(max){
            return function(value){
                return (value.length <= max) ? undefined : `vui lòng nhập tối đa ${max} kí tự`
            }
        }
    };

    function getParentElement (element, selector){
        while(element.parentElement){
            if(element.parentElement.matches(selector)){
                return element.parentElement
            }
            element = element.parentElement
        }
    }
    // chỉ xử lý khi có element trong DOM
    if(formElement){
        const inputs = formElement.querySelectorAll('[name][rules]')
        for(let input of inputs){
            let rules = input.getAttribute('rules').split('|')
            for(let rule of rules){
                let isRulesHasValue = rule.includes(':')
                let ruleInfor
                if(isRulesHasValue){
                    ruleInfor = rule.split(':')
                    rule = ruleInfor[0]
                }
                let ruleFunction = validatorRules[rule];
                if(isRulesHasValue){
                    ruleFunction = ruleFunction(ruleInfor[1])
                }

                if(Array.isArray(formRules[input.name])) {
                    formRules[input.name].push(ruleFunction)
                }else {
                    formRules[input.name] = [ruleFunction]
                }
            }

            // lắng nghe sự kiện trên từng input
            input.onblur = handleValidate;
            input.oninput = handleClearError;
        }

        function handleValidate(even) {
            const rules = formRules[even.target.name]
            let errorMessage;
            for(let rule of rules ){
                errorMessage = rule(even.target.value)
                if(errorMessage){
                    break;
                }
            }
            // nếu có 'errorMessage' hiển thị ra UI
            if(errorMessage){
                const formGroup = getParentElement(even.target, formGroupSelector)
             if(formGroup){
                    const formMessage = formGroup.querySelector(formMessageSelector)
                    if(formMessage){
                        formMessage.innerHTML = errorMessage;
                        formGroup.classList.add('error')
                    }
                }
            }
            return errorMessage
        }
        
        function handleClearError(even) {
            const formGroup = getParentElement(even.target, formGroupSelector)
            if(formGroup.classList.contains('error')){
                formGroup.classList.remove('error')
                const formMessage = formGroup.querySelector(formMessageSelector)

                if(formMessage){
                    formMessage.innerHTML = '';
                }
            }
        }
    }
    
    // xử lý hành vi submit form
    formElement.onsubmit = function(even) {
        even.preventDefault()
        const inputs = formElement.querySelectorAll('[name][rules]')
        let isValid = true;
        for(let input of inputs){
            if(handleValidate({target : input})){
                isValid = false;
            }
        }
        //khi không có lỗi thì submit form
        if(isValid){
            if(typeof _this.onSubmit === 'function'){
                let enableInputs = formElement.querySelectorAll('[name]');
                let formValues = Array.from(enableInputs).reduce(function(values, input ){
                    switch(input.type){
                        case 'radio':
                            values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                            break;
                        case 'checkbox':
                            if(input.matches(':checked')){ 
                                values[input.name] = '';
                                return values;
                            }
                            if(!Array.isArray(values[input.name])){
                                values[input.name] = []
                            }    
                            values[input.name].push(input.value)
                            break;
                        case 'file':
                            values[input.name] = input.files;
                            break    
                        default:
                            values[input.name] = input.value;
                    }
                    return values;
                },{});
                //gọi lại hàm onSubmit và trả về kèm giá trị của form
                _this.onSubmit(formValues)
            }else{
                formElement.submit()
            }
        }
    }
}