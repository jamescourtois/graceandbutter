


<div class="formbox bg-dark-teal py-16 lg:py-24">
    <div class="container flex flex-wrap mx-auto px-4">
        
        <div class="w-full lg:w-1/3">
            <h2 class="text-white mb-8 text-4xl md:text-5xl">Let's start a conversation.</h2>
            <p class="text-white">Fill out this form to place an order request or just start a casual conversation. I am always happy to connect with people over food!</p>
            <p class="text-white">If you would rather email me, you can reach me at <a class="text-white underline hover:text-light-teal" href="mailto:graceandbutter@gmail.com">graceandbutter@gmail.com</a></p>
            <p class="text-white mb-16">If you would like to leave feedback about your recent order, please <a class="text-white underline hover:text-light-teal" href="/feedback">fill out my feedback form.</a></p>
        </div>
        
        <div class="w-full lg:w-2/3 lg:pl-24">
            
            <h3 class="text-white">Contact &amp; Order Request Form</h3>

            <form id="contact" action="https://api.form-data.com/f/9xz2k54fdkmw20ecsf9ac" method="post" >
                
                <div>
                    <h3 class="text-sm uppercase text-light-teal">Required info</h3>
                </div>
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
            
                <div class="w-full mb-12">
                    <label class="block text-sm font-semibold mb-2 text-white" for="message">
                        Details*
                    </label>
            
                    <textarea
                        id="message"
                        rows="4"
                        name="message"
                        class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
                        placeholder="What can I do for you?"
                        required
                    ></textarea>
                </div>

                <div>
                    <h3 class="text-sm uppercase text-light-teal">Optional Info</h3>
                </div>

                <div class="w-full lg:w-1/2 float-left mb-12">
                    <label class="block text-sm font-semibold mb-2 text-white" for="need_by_date">
                        When do you need this?
                    </label>
                    <input
                        type="date"
                        id="need_by_date"
                        name="need_by_date"
                        placeholder="mm/dd/yyyy"
                        class="border shadow rounded-lg outline-none mb-2 px-4 py-3"
                        >
                </div>
                <div class="w-full lg:w-1/2 float-left mb-12">
                    <div class="text-sm font-semibold mb-2 text-white">Pickup or Delivery?</div>
                    <input
                    type="radio"
                    id="delivery"
                    name="pickup_or_delivery"
                    value="delivery">
                    <label class="text-sm font-semibold mb-2 text-white" for="delivery">
                        Delivery ($20 fee applies)
                    </label>
                    <br />
                    <input
                    type="radio"
                    id="pickup"
                    name="pickup_or_delivery"
                    value="pickup">
                    <label class="text-sm font-semibold mb-2 text-white" for="pickup">
                        Pick up
                    </label>
                </div>

                <input type="text" name="xx_password" class="sr-only" tabindex="-1" autocomplete="off">

                    <input
                        type="submit"
                        value="Submit"
                        class="btn w-full sm:w-auto"
                    >
                </div>
            </form>
        </div>
    </div>
</div>

