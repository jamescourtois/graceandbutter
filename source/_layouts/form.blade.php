
<script>
    function onloadCallback() {
        /* Place your recaptcha rendering code here */
        var form = document.getElementById('gabform');

        form.addEventListener("submit", function (event) {
            if (grecaptcha.getResponse() === '') {
                event.preventDefault();
                alert('Please check the recaptcha box and try submitting again.');
            }
        }, false);
    }
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback"></script>

<h2 class="text-white">Get in touch!</h2>
<p>Fill out this form and let me know what food, events, or experiences you are interested in! I will get back to you ASAP.</p>

<form id="gabform" action="https://www.form-data.com/_functions/submit/epzdlvt41h7pg9e2ljhgn" method="post" >
    

    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-sm font-semibold" for="contact-name">
                Name
            </label>

            <input
                type="text"
                id="contact-name"
                placeholder="Jane Doe"
                name="name"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-sm font-semibold mb-2" for="contact-email">
                Email Address
            </label>

            <input
                type="email"
                id="contact-email"
                placeholder="email@domain.com"
                name="email"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
    </div>

    <div class="w-full mb-12">
        <label class="block text-sm font-semibold mb-2" for="contact-message">
            Message
        </label>

        <textarea
            id="contact-message"
            rows="4"
            name="message"
            class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
            placeholder="A lovely message here."
            required
        ></textarea>
    </div>

    <div class="g-recaptcha mb-6"
       data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>

    <div class="flex justify-start w-full">
        <input
            type="submit"
            value="Submit"
            class="btn"
        >
    </div>
</form>