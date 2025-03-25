@extends('main.index')

@section('main')
    <!-- main section -->
    <div class="h-[30vh] w-full bg-gray-200 grid place-items-center" >
        <div class="text-center" data-aos="zoom-in-down">
            <h2 class="text-4xl text-purple-500 font-bold">Contact</h2>
            <p class="text-lg font-bold mt-2">Home / contact</p>
        </div>
    </div>
    <!-- contact us -->
    <div class="w-[90%] m-auto">
        <h2 class="text-center my-10 text-3xl text-black font-bold" data-aos="fade-up">Contact Us</h2>
        <div class="flex justify-between my-10 max-md:flex-wrap">
            <div class="text-lg w-[45%] max-md:w-[100%] " data-aos="fade-up" data-aos-duration="1000">
                <h2 class="font-bold text-xl">Get in Touch</h2>
                <p class="my-2 text-justify">I'm happy to help! If you're looking for contact information or details about learn anything
                    online free courses website for e-learning, I don't have real-time browsing capabilities to
                    access current websites or specific contact details.
                </p>
                <!-- location -->
                <div class="flex place-items-center mt-5">
                    <div class="text-2xl bg-purple-500 size-10 leading-10 text-center text-white">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="ml-2 leading-4">
                        <p class="font-bold text-lg">Location</p>
                        <p>Rajeev nagar , patna</p>
                    </div>
                </div>
                <!-- mobile -->
                <div class="flex place-items-center my-5">
                    <div class="text-2xl bg-purple-500 size-10 leading-10 text-center text-white">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="ml-2 leading-4">
                        <p class="font-bold text-lg">Mobile</p>
                        <p>+91 9334612395</p>
                    </div>
                </div>
                <div class="flex place-items-center my-5">
                    <div class="text-2xl bg-purple-500 size-10 leading-10 text-center text-white">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="ml-2 leading-4">
                        <p class="font-bold text-lg">email</p>
                        <p>learnanything@gmail.com</p>
                    </div>
                </div>
            </div>
            <!-- right side of the contact -->
            <div class="w-[45%] max-md:w-[100%] max-md:mt-10" data-aos="fade-up" data-aos-duration="1500">
                <div>
                    <div class="">
                        <form onsubmit="sendEmail(); reset(); return false;">
                            <!-- <form action="https://api.web3forms.com/submit" method="POST"> -->
                            <input type="hidden" name="access_key" value="16c6d50c-2a00-4bf3-ab4b-6a2467c5bb3e">
                            <div class="grid grid-cols-1 text-xl">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" required placeholder="enter your name " class="border p-2 mt-2">
                            </div>

                            <div class="grid grid-cols-1 text-xl my-5">
                                <label for="email">Email</label>
                                <input type="Email" name="Email" id="email" required placeholder="enter your email " class="border p-2 mt-2">
                            </div>

                            <div class="grid grid-cols-1 text-xl my-5"> 
                                <label for="msg">Message</label>
                                <textarea cols="auto" rows="auto" id="msg" name="message" required placeholder="message" class="border p-2 mt-2"></textarea>
                            </div>

                            <div class="grid grid-cols-1 text-xl my-5">
                                <button class="border-1 p-2 mt-2 bg-purple-500 font-bold border-white hover:bg-transparent hover:text-purple-500 hover:border-purple-500">send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection