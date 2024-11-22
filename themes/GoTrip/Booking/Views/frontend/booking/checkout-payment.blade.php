<div class="form-section mt-40">
    <h3 class="text-22 fw-500 mb-20">{{ __("How do you want to pay?") }}</h3>
    <div class="accordion -simple row y-gap-20 pt-30 js-accordion">
        @foreach($gateways as $k => $gateway)
            <div class="col-12 accordion__item px-20">
                <div class="border-light rounded-4 py-20">
                    <div class="accordion__button d-flex items-center">
                        <!-- Making the label clickable to select the radio button -->
                        <label class="d-flex items-center" for="radio_gateway_{{$k}}" style="width: 100%; cursor: pointer;">
                            <input type="radio" name="payment_gateway" id="radio_gateway_{{$k}}" value="{{$k}}" onclick="event.stopPropagation();" style="margin-right: 10px;">
                            @if($logo = $gateway->getDisplayLogo())
                                <img src="{{$logo}}" alt="{{$gateway->getDisplayName()}}">
                            @endif
                            <span class="shrink-0 ml-20">{{ $gateway->getDisplayName() }}</span>
                        </label>
                    </div>
                    <div id="content_gateway_{{$k}}" class="accordion__content collapse" aria-labelledby="radio_gateway_{{$k}}" data-parent=".js-accordion">
                        <div class="pt-20 pl-60">
                            <div class="gateway_name">
                                {!! $gateway->getDisplayName() !!}
                            </div>
                            {!! $gateway->getDisplayHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion__item');

    accordionItems.forEach(item => {
        const label = item.querySelector('.accordion__button label');
        const content = item.querySelector('.accordion__content');

        label.addEventListener('click', function (e) {
            // Prevent label click from closing the radio button selection
            e.stopPropagation();
            // Toggle the selected accordion item
            content.classList.toggle('show');

            // Collapse other open items
            accordionItems.forEach(i => {
                const otherContent = i.querySelector('.accordion__content');
                if (otherContent !== content) {
                    otherContent.classList.remove('show');
                }
            });
        });
    });
});
</script>
