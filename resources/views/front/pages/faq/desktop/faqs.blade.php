<div class="faqs">
    <div class="main-faqs">
        <h3>Preguntas frecuentes</h3>
    </div>

    @if(isset($faqs))
        @foreach($faqs as $faq)
            <div class="tab">
                <div class="main-question">
                    <div class="question">
                        <span>{{$faq->title}}</span>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M11,4H13V16L18.5,10.5L19.92,11.92L12,19.84L4.08,11.92L5.5,10.5L11,16V4Z" />
                        </svg>
                    </div>
                    <div class="pointer">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M11,4H13V16L18.5,10.5L19.92,11.92L12,19.84L4.08,11.92L5.5,10.5L11,16V4Z" />
                        </svg>
                    </div>
                </div>
                <div class="reply">
                    {!!$faq->description!!}
                </div>
            </div> 
        @endforeach
   
    @endif
</div>
