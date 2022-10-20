


<div class="formbox bg-dark-teal py-16 lg:py-24">
  <div class="container flex flex-wrap mx-auto px-4">
      
      <div class="w-full lg:w-1/3">
          <h1 class="text-white mb-8 text-4xl md:text-5xl">Get Your Cookie Box of the Month!</h1>
          <p class="text-white">Fill out this form and I will be in touch to sort out the payment and delivery details. Thank you!</p>
          <ul class="text-left pl-4 text-white">
            <li>Cookies by the dozen shipped on the 15th of each month</li>
            <li>$25 per dozen local pick up / $35 per dozen shipped</li>
            <li>Free pick up in the STL area</li>
            <li>No commitments, just fun flavors!</li>
            <li>Order deadline is the 5th of each month</li>
        </ul>
        <div class="mb-16">
            <img src="/assets/img/november_cookie.png" alt="November Cookie Box">
        </div>
      </div>
      
      <div class="w-full lg:w-2/3 lg:pl-24">
          <h3 class="text-white">Cookie Box Sign Up Form</h3>
          <form id="contact" action="https://api.form-data.com/f/t35iq57k62hnz3qake1rj" method="post" >
              
          
              <div class="flex flex-wrap mb-6 -mx-3">
                  <div class="w-full lg:w-1/2 mb-6 lg:mb-0 px-3">
                      <label class="block mb-2 text-sm font-semibold text-white" for="name">
                          Name*
                      </label>
          
                      <input
                          type="text"
                          id="name"
                          placeholder="Enter your name"
                          name="name"
                          class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                          required
                      >
                  </div>
          
                  <div class="w-full px-3 lg:w-1/2">
                      <label class="block text-sm font-semibold mb-2 text-white" for="email">
                          Email Address*
                      </label>
          
                      <input
                          type="email"
                          id="email"
                          placeholder="Enter your email"
                          name="email"
                          class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                          required
                      >
                  </div>
              </div>

              <div class="w-full float-left mb-6">
                <div class="text-sm font-semibold mb-2 text-white">Pick it up, or ship it?*</div>
                
                <input
                type="radio"
                id="delivery"
                required
                name="pickup_or_ship"
                value="ship"
                onclick="address.toggle()">
                <label class="text-sm font-semibold mb-2 text-white" for="delivery">
                    Ship my order (Shipping fee applies)
                </label>
                <br />
                <input
                type="radio"
                id="pickup"
                required
                name="pickup_or_ship"
                value="pickup"
                onclick="address.toggle()">
                <label class="text-sm font-semibold mb-2 text-white" for="pickup">
                    I'll pick it up
                </label>

            </div>

            <div class="w-full float-left mb-6 hidden" id="address-wrap">
                <label class="block text-sm font-semibold mb-2 text-white" for="ship_address">
                    Shipping Address?*
                </label>
                <div class="text-sm font-semibold mb-2 text-white"></div>
                <textarea
                    id="ship_address"
                    rows="4"
                    name="ship_address"
                    class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
                    placeholder="Write your full address here."
                ></textarea>
            </div>

            <div class="w-full float-left mb-6">
                <div class="text-sm font-semibold mb-2 text-white">How many dozens?*</div>
                <input
                type="radio"
                id="how_many_dozens"
                required
                name="how_many_dozens"
                value="1 dozen ">
                <label class="text-sm font-semibold mb-2 text-white" for="how_many_dozens">
                    1 dozen 
                </label>
                <br />
                <input
                type="radio"
                id="pickup"
                required
                name="how_many_dozens"
                value="2 dozen ">
                <label class="text-sm font-semibold mb-2 text-white" for="pickup">
                    2 dozen 
                </label>
                <br />
                <input
                type="radio"
                id="pickup"
                required
                name="how_many_dozens"
                value="3 dozen ">
                <label class="text-sm font-semibold mb-2 text-white" for="pickup">
                    3 dozen 
                </label>
            </div>
          
              <div class="w-full mb-12">
                  <label class="block text-sm font-semibold mb-2 text-white" for="message">
                      Any Comments/Questions? (Optional)
                  </label>
          
                  <textarea
                      id="comment"
                      rows="4"
                      name="comment"
                      class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
                      placeholder="Write your comment or question here."
                  ></textarea>
              </div>

              <input type="text" name="xx_password" class="sr-only" tabindex="-1" autocomplete="off">
          
          
              <div class="flex justify-start w-full">
                  <input
                      type="submit"
                      value="Sign Up"
                      class="btn"
                  >
              </div>
          </form>
      </div>
  </div>
</div>
@push('scripts')
<script>
    const address = {
        toggle() {
            const delivery = document.getElementById('delivery');
            
            if (delivery.checked) {
                document.getElementById('address-wrap').classList.remove('hidden');
                document.getElementById('ship_address').required = true;
            }else{
                document.getElementById('address-wrap').classList.add('hidden');
                document.getElementById('ship_address').required = false;
            }
        },
    }
</script>
@endpush

