<div class="tab-pane fade" id="recurring-buy" role="tabpanel" aria-labelledby="recurring-buy-tab">
    <section class="recurring-exchange mt-60">
        <div class="container">
            <div class="common-heading-section text-center text-lg-start mb-60">
                <h2 class="text-primary">Recurring Buy BTC with USD</h2>

            </div>
            @include('frontend.includes.buy.recurring_buy.recurring_plan')
        </div>
    </section>

   @include('frontend.includes.buy.recurring_buy.bcoin_learning_hub')

    @include('frontend.includes.buy.recurring_buy.advantage_dca')
    @include('frontend.includes.buy.recurring_buy.faq_dca')
    @include('frontend.includes.buy.recurring_buy.3_simple_steps')

    <!-- Coin pair Start  -->
    @include('frontend.includes.buy.popular_crypto')
    <!-- Coin pair End  -->
    @include('frontend.includes.buy.recurring_buy.learning_hub_blog_section')
</div>
