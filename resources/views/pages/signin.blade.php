<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/styles/6-pages/style-login/login.css">
    <title>Sign in</title>
</head>
<body>
    <div id="wrapper" class="container-fluid g-0">
        <header id="header" class="header d-flex justify-content-between align-items-center my-0 mx-auto">
            <div class="header__logo">
                <a href="{{route('home')}}" class="header__logo--link text-decoration-none">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 24" aria-hidden="true"
                            focusable="false">
                            <path
                                d="M6.547,3.125v6.008c0,0,2.117,0,3.25-0.086c0.891-0.156,1.055-0.242,1.219-1.133l0.328-1.305h0.969l-0.164,2.852 l0.086,2.922h-0.977l-0.242-1.141c-0.242-0.812-0.57-0.977-1.219-1.055c-0.812-0.086-3.25-0.086-3.25-0.086v5.039 c0,0.969,0.492,1.383,1.625,1.383h3.414c1.055,0,2.109-0.086,2.766-1.625l0.883-1.953h0.82c-0.086,0.406-0.492,3.984-0.57,4.789 c0,0-3.086-0.078-4.383-0.078H5.25l-3.492,0.078v-0.883l1.133-0.25c0.82-0.164,1.062-0.406,1.062-1.055 c0,0,0.086-2.195,0.086-5.852c0-3.648-0.086-5.844-0.086-5.844c0-0.727-0.242-0.891-1.062-1.055L1.758,2.555V1.664l3.414,0.07h6.5 c1.297,0,3.484-0.234,3.484-0.234s-0.078,1.375-0.164,4.625h-0.891l-0.328-1.141c-0.32-1.461-0.805-2.188-1.703-2.188H6.961 C6.547,2.797,6.547,2.875,6.547,3.125z M19.703,3.766h0.977V7.18l3.336-0.164l-0.164,1.547l-3.25-0.25v6.016 c0,1.703,0.57,2.359,1.547,2.359c0.883,0,1.539-0.492,1.781-0.898l0.484,0.57c-0.484,1.133-1.859,1.703-3.164,1.703 c-1.617,0-2.93-0.969-2.93-2.836V8.398h-1.938V7.586C18.008,7.422,19.219,6.445,19.703,3.766z M26.695,14.242l0.648,1.547 c0.242,0.648,0.812,1.305,2.109,1.305c1.383,0,1.953-0.734,1.953-1.625c0-2.766-5.445-1.953-5.445-5.688c0-2.109,1.703-3.094,3.898-3.094c0.977,0,2.438,0.164,3.172,0.492c-0.164,0.812-0.25,1.867-0.25,2.68l-0.805,0.078l-0.57-1.625 c-0.164-0.398-0.82-0.727-1.625-0.727c-0.977,0-1.953,0.406-1.953,1.461c0,2.516,5.609,1.953,5.609,5.688c0,2.117-1.867,3.25-4.148,3.25c-1.703,0-3.414-0.656-3.414-0.656c0.164-0.969,0.086-2.023,0-3.086H26.695z M33.031,22.039 c0.242-0.891,0.406-2.023,0.57-3.086l0.891-0.078l0.328,1.703c0.078,0.406,0.32,0.734,0.969,0.734c1.055,0,2.438-0.648,3.742-2.922 c-0.578-1.383-2.281-5.844-3.828-9.258c-0.406-0.898-0.484-0.977-1.047-1.141l-0.414-0.156v-0.82l2.445,0.086l3-0.164V7.75 l-0.734,0.164c-0.57,0.078-0.805,0.398-0.805,0.727c0,0.086,0,0.164,0.078,0.328c0.156,0.492,1.461,4.141,2.438,6.578c0.805-1.703,2.352-5.523,2.594-6.172c0.086-0.328,0.164-0.406,0.164-0.648c0-0.414-0.242-0.656-0.805-0.812L42.039,7.75V6.938 l2.281,0.078l2.109-0.078V7.75l-0.406,0.32c-0.812,0.328-0.898,0.406-1.219,1.062l-3.57,8.359 c-2.117,4.797-4.312,5.203-5.852,5.203C34.406,22.695,33.672,22.445,33.031,22.039z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="header__button-control">
                <ul class="list__button-control d-flex align-items-center fw-bolder">
                    <li class="button-control--login">
                        <a class="d-inline-flex text-decoration-none" href="{{route('register')}}">
                            <button class="btn-etsy-main btn-hover-effect-main">
                                Register
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </header>

        <div id="content-login">
            <div class="box-login">
                <div class="box-login-wrapper">
                    <div class="box-login-main">
                        <form action="" id="sign-in-form" method="POST">
                            <div class="login-main-top">
                                <div class="login-main-top-wrapper">
                                    <div class="login-main-top__heading">
                                        <h1>Sign in to continue</h1>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email address
                                        </label>
                                        <input class="input__element--large effect-hover-input w-100" name="email" rules="required|email" type="text">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Passwork
                                        </label>
                                        <div class="wrapper-input">
                                            <span class="hide-show-password">Show</span>
                                            <input class="input__element--large effect-hover-input w-100" name="password" rules="required|min:6" type="password" name="password" placeholder>
                                        </div>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="login-main-top__control-sign-in">
                                        <div class="stay-signed-in">
                                            <input type="checkbox" name="" id="persisent">
                                            <label for="persisent">Stay signed in </label>
                                        </div>
                                        <div class="forgot-password">
                                            <a class="" href="">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="login-main-top__submit">
                                        <button class="btn-etsy-main btn-hover-effect-main bg-btn-main w-100">
                                            Sign in
                                        </button>
                                    </div>
                                    <p class="login-main-top__trouble-signing-in">
                                        <a href="" class="">
                                            Trouble signing in?
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="login-main-horizontal">
                                <span class="">
                                    OR
                                </span>
                            </div>
                            <div class="login-main-bottom">
                                <div class="login-other">
                                    <button class="login-other__btn btn-etsy-main btn-hover-effect-main w-100">
                                        <span class="login-other__btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 16 16" version="1.1" aria-hidden="true" focusable="false"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <path d="M15.68,8.18181818 C15.68,7.61454546 15.6290909,7.06909091 15.5345454,6.54545454 L8,6.54545454 L8,9.64 L12.3054546,9.64 C12.12,10.64 11.5563636,11.4872727 10.7090909,12.0545454 L10.7090909,14.0618182 L13.2945454,14.0618182 C14.8072727,12.6690909 15.68,10.6181818 15.68,8.18181818 L15.68,8.18181818 Z" id="Shape" fill="#4285F4" fill-rule="nonzero"></path>
                                                    <path d="M8,16 C10.16,16 11.9709091,15.2836364 13.2945454,14.0618182 L10.7090909,12.0545454 C9.99272729,12.5345454 9.07636364,12.8181818 8,12.8181818 C5.91636364,12.8181818 4.15272727,11.4109091 3.52363636,9.52 L0.850909091,9.52 L0.850909091,11.5927273 C2.16727273,14.2072727 4.87272727,16 8,16 L8,16 Z" id="Shape" fill="#34A853" fill-rule="nonzero"></path>
                                                    <path d="M3.52363636,9.52 C3.36363636,9.04 3.27272727,8.52727273 3.27272727,8 C3.27272727,7.47272727 3.36363636,6.96 3.52363636,6.48 L3.52363636,4.40727273 L0.850909091,4.40727273 C0.309090909,5.48727273 0,6.70909091 0,8 C0,9.29090907 0.309090909,10.5127273 0.850909091,11.5927273 L3.52363636,9.52 L3.52363636,9.52 Z" id="Shape" fill="#FBBC05" fill-rule="nonzero"></path><path d="M8,3.18181818 C9.17454542,3.18181818 10.2290909,3.58545454 11.0581818,4.37818182 L13.3527273,2.08363636 C11.9672727,0.792727273 10.1563636,0 8,0 C4.87272727,0 2.16727273,1.79272727 0.850909091,4.40727273 L3.52363636,6.48 C4.15272727,4.58909091 5.91636364,3.18181818 8,3.18181818 L8,3.18181818 Z" id="Shape" fill="#EA4335" fill-rule="nonzero"></path><polygon id="Shape" points="0 0 16 0 16 16 0 16"></polygon></g>
                                            </svg>
                                        </span>
                                        <span class="login-other__btn-text">
                                            Continue with Google
                                        </span>
                                    </button>
                                </div>
                                <div class="login-other">
                                    <button class="login-other__btn btn-etsy-main btn-hover-effect-main w-100">
                                        <span class="login-other__btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 16 16" version="1.1" aria-hidden="true" focusable="false">
                                                <path d="M15.0784247,15.9571892 C15.5636139,15.9571892 15.9570656,15.5637375 15.9570656,15.0784247 L15.9570656,0.915027027 C15.9570656,0.42965251 15.5636757,0.0363243243 15.0784247,0.0363243243 L0.915027027,0.0363243243 C0.42965251,0.0363243243 0.0363243243,0.42965251 0.0363243243,0.915027027 L0.0363243243,15.0784247 C0.0363243243,15.5636757 0.429590734,15.9571892 0.915027027,15.9571892 L15.0784247,15.9571892 Z" id="Blue_1_" fill="#3C5A99"></path>
                                                <path d="M11.0214054,15.9571892 L11.0214054,9.7917529 L13.0908417,9.7917529 L13.4007104,7.38897297 L11.0214054,7.38897297 L11.0214054,5.85494981 C11.0214054,5.15928958 11.2145792,4.68522008 12.212139,4.68522008 L13.4844788,4.68466409 L13.4844788,2.53559846 C13.2644324,2.5063166 12.5091583,2.44089575 11.6304556,2.44089575 C9.79601544,2.44089575 8.54010811,3.56064865 8.54010811,5.61698842 L8.54010811,7.38897297 L6.46535907,7.38897297 L6.46535907,9.7917529 L8.54010811,9.7917529 L8.54010811,15.9571892 L11.0214054,15.9571892 Z" id="f" fill="#FFFFFF"></path>
                                            </svg>
                                        </span>
                                        <span class="login-other__btn-text">
                                            Continue with Facebook
                                        </span>
                                    </button>
                                </div>
                                <div class="login-other">
                                    <button class="login-other__btn btn-etsy-main btn-hover-effect-main w-100">
                                        <span class="login-other__btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false">
                                                <rect width="16" height="16" fill="white"></rect>
                                                <path d="M10.0164 2.82125C10.5157 2.1965 10.8546 1.35725 10.7654 0.5C10.0344 0.536 9.14225 0.98225 8.6257 1.60775C8.16163 2.14325 7.75153 3.01775 7.85874 3.839C8.67893 3.91025 9.49912 3.42875 10.0164 2.82125ZM11.8405 8.20025C11.8225 6.36725 13.3347 5.495 13.4051 5.441C12.5512 4.178 11.2175 4.0355 10.7549 3.9995C9.56285 3.92825 8.54998 4.676 7.98094 4.676C7.41116 4.676 6.53999 4.0355 5.5976 4.05275C4.37106 4.07 3.23299 4.7645 2.61073 5.86775C1.33021 8.07575 2.2726 11.351 3.51788 13.1488C4.1229 14.0383 4.85163 15.0178 5.81201 14.9825C6.71917 14.9473 7.07529 14.3945 8.17812 14.3945C9.2802 14.3945 9.60033 14.9825 10.5607 14.9645C11.5563 14.9465 12.1794 14.0743 12.7844 13.184C13.4779 12.17 13.762 11.1905 13.78 11.1372C13.7613 11.12 11.8585 10.3895 11.8405 8.20025Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <span class="login-other__btn-text">
                                            Continue with Apple
                                        </span>
                                    </button>
                                </div>
                                <p id="" class="login-main-bottom__describe">
                                    By clicking Sign in or Continue with Google, Facebook, or Apple, you agree to Etsy's
                                    <a target="_blank" href="" title="Terms of Use">Terms of Use</a>
                                    and 
                                    <a target="_blank" href="" title="Privacy Policy">Privacy Policy</a>. 
                                    Etsy may send you communications; you may change your preferences in your account settings.
                                    We'll never post without your permission.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/scripts/js-components/validator.js"></script>
    <script type="text/javascript">
        const form = new validator('#sign-in-form','.form-group','.form-message')
        form.onSubmit = function(formData) {
            console.log(formData)
        }
    </script>
</body>
</html>