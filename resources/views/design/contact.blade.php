@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-12 md:py-24">
        <div class="grid lg:grid-cols-2 gap-20">
            
            <div class="space-y-12">
                <div>
                    <h1 class="text-5xl md:text-7xl font-serif text-zinc-900 mb-6">Let's create <br><span class="italic font-light text-purple-600">something beautiful.</span></h1>
                    <p class="text-zinc-500 text-lg font-light max-w-md leading-relaxed">
                        Have a specific design in mind? Reach out for a private consultation or bespoke measurement session.
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 gap-y-10 gap-x-8 pt-8">
                    <div class="space-y-2">
                        <p class="text-[10px] uppercase tracking-[0.3em] text-zinc-400 font-black">Direct Line</p>
                        <a href="tel:+2340000000000" class="text-lg font-medium text-zinc-900 hover:text-purple-600 transition-colors">
                            07026696845
                        </a>
                    </div>
                    <div class="space-y-2">
                        <p class="text-[10px] uppercase tracking-[0.3em] text-zinc-400 font-black">Instagram</p>
                        <a href="#" class="text-lg font-medium text-zinc-900 hover:text-purple-600 transition-colors">
                            @veeks_clothing
                        </a>
                    </div>
                    <div class="space-y-2">
                        <p class="text-[10px] uppercase tracking-[0.3em] text-zinc-400 font-black">Studio Location</p>
                        <p class="text-lg font-medium text-zinc-900">
                            Abuja, Nigeria
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p class="text-[10px] uppercase tracking-[0.3em] text-zinc-400 font-black">Hours</p>
                        <p class="text-lg font-medium text-zinc-900">
                            Mon — Sat: 9am - 6pm
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-zinc-50 p-8 md:p-12 rounded-3xl shadow-sm border border-zinc-100">
                <div class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="text-[10px] uppercase tracking-widest font-bold text-zinc-500">Your Name</label>
                            <input type="text" id="name" placeholder="John Doe" 
                                   class="w-full bg-white border border-zinc-200 p-4 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-600/20 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label for="service" class="text-[10px] uppercase tracking-widest font-bold text-zinc-500">Service Needed</label>
                            <select id="service" class="w-full bg-white border border-zinc-200 p-4 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-600/20 transition-all appearance-none">
                                <option value="Custom Bridal">Custom Bridal</option>
                                <option value="Ready-to-Wear">Ready-to-Wear</option>
                                <option value="Bespoke Suit/Gown">Bespoke Suit/Gown</option>
                                <option value="Measurement Session">Measurement Session</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-[10px] uppercase tracking-widest font-bold text-zinc-500">Your Message</label>
                        <textarea id="message" rows="4" placeholder="Describe the design or occasion..." 
                                  class="w-full bg-white border border-zinc-200 p-4 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-600/20 transition-all"></textarea>
                    </div>

                    <button type="button" onclick="sendToWhatsApp()" 
                            class="w-full bg-zinc-900 text-white py-5 rounded-xl font-bold uppercase tracking-widest text-xs hover:bg-purple-700 transition-all shadow-xl shadow-zinc-900/10 flex items-center justify-center gap-3">
                        <span>Send via WhatsApp</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.06 3.973L0 16l4.104-1.076a7.864 7.864 0 0 0 3.89.959h.004c4.369 0 7.926-3.558 7.93-7.926a7.855 7.855 0 0 0-2.327-5.622zM7.994 14.52a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </button>
                    <p class="text-[10px] text-zinc-400 text-center uppercase tracking-widest font-medium">
                        Average response time: 1-2 hours
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
function sendToWhatsApp() {
    // 1. Get the values from the input fields
    const name = document.getElementById('name').value;
    const service = document.getElementById('service').value;
    const message = document.getElementById('message').value;
    
    // 2. ENTER HER REAL WHATSAPP NUMBER HERE
    // Use the international format without the "+" or "00"
    // Example: 2348012345678 (for Nigeria)
    const phoneNumber = "2347026696845"; 

    // 3. Check if name is empty
    if(name === "") {
        alert("Please enter your name first.");
        return;
    }

    // 4. Construct the encoded message
    const intro = `Hello Veeks! %0A%0AMy name is *${name}*.`;
    const body = `%0AI am reaching out regarding your *${service}* service.`;
    const note = `%0A%0A*Message:* ${message}`;
    
    const finalURL = `https://wa.me/${phoneNumber}?text=${intro}${body}${note}`;

    // 5. Open in a new tab
    window.open(finalURL, '_blank');
}
</script>

@endsection