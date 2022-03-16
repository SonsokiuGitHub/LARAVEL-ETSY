<div id="global-enhancements-search-suggestions" class="box-search-suggestions" data-id="search-suggestions">
    <div role="status" class="wt-screen-reader-only" aria-live="assertive">
        
    </div>
    <ul class="list-search-suggestions">

        <li data-is-header="true" class="as-rich text-caption-16">
            <div class="as-wrap">
                <div class="as-entry">
                    <div class="as-suggestion as-header">
                        <strong>Popular right now</strong>
                    </div>
                </div>
            </div>
        </li>
        @foreach($dataTrending as $trending)
        <li data-is-trending="true" class="as-rich as-first text-caption-16">
            <div class="as-wrap">
                <div class="as-entry">
                    <div class="as-suggestion">
                        {{$trending->data_trending}}
                    </div>
                </div>
            </div>

        </li>
        @endforeach





    </ul>
</div>