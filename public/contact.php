<?php
$activePage = 'contact';
$pageTitle = 'Contact — Shyam Interiors';
$pageDescription = 'Get in touch with Shyam Interiors for your interior design needs. We’d love to hear about your project.';
$pageImage = '/assets/images/contact.jpg';

include '../includes/header.php';
?>
<!--Hero section-->
<section class="relative py-16 md:py-20 bg-secondary text-secondary-foreground overflow-hidden">
    <div class="absolute inset-0 opacity-30 pointer-events-none [background:radial-gradient(circle_at_top_right,var(--color-primary),transparent_55%)]"></div>
    <div class="container-wide relative">
        <span class="inline-block text-xs font-medium tracking-[0.2em] uppercase text-primary mb-4">
            Contact
        </span>
        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl max-w-3xl">
            Let's talk about your space.
        </h1>
        <p class="mt-5 max-w-2xl text-base md:text-lg text-secondary-foreground/75 leading-relaxed">
            Tell us a little about your project — we typically respond within 24 hours.
        </p>
    </div>
</section>
<!--contact options section-->
<section class="py-20 md:py-28">
    <div class="container-wide">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="flex gap-4">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-5 w-5" aria-hidden="true">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </span>
                    <div>
                        <div class="font-medium">Address</div>
                        <p class="text-sm text-muted-foreground">Dommasandra, Sarjapur Road, Bengaluru, 562125</p>
                    </div>
                </div>
            </div>

            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="flex gap-4">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5" aria-hidden="true">
                            <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                        </svg>
                    </span>
                    <div>
                        <div class="font-medium">Phone</div>
                        <p class="text-sm text-muted-foreground">
                            <a href="tel:+916377170420" class="hover:underline">+91 6377170420</a>
                            <a href="tel:+919535015831" class="hover:underline">+91 9535015831</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="group bg-card rounded-2xl p-8 border border-border hover-lift">
                <div class="flex gap-4">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-5 w-5" aria-hidden="true">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        </svg></span>
                    <div>
                        <div class="font-medium">Email</div>
                        <p class="text-sm text-muted-foreground">
                            <a href="mailto:shyamsunderthakan2@gmail.com" class="hover:underline">shyamsunderthakan2@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mt-16 container-wide grid grid-col-1 lg:grid-cols-2 gap-10">
        <div class="overflow-hidden rounded-2xl border border-border aspect-[4/3]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15557.769480733969!2d77.73993520391143!3d12.879251766809753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae72ad9fc90cb1%3A0xc01792de47c4568!2sDommasandra%2C%20Bengaluru%2C%20Karnataka%20562125!5e0!3m2!1sen!2sin!4v1776698129942!5m2!1sen!2sin" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <div class="bg-card border border-border rounded-3xl overflow-hidden shadow-[var(--shadow-card)] flex flex-col h-[450px]">
                <!-- Chat Header -->
                <div class="bg-[#075e54] p-5 flex items-center gap-4 text-white">
                    <div class="relative">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#075e54] font-bold text-xl uppercase">S</div>
                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-[#25D366] border-2 border-[#075e54] rounded-full animate-pulse"></span>
                    </div>
                    <div>
                        <h3 class="font-display font-medium">Shyam Interiors</h3>
                        <p class="text-[10px] opacity-80 uppercase tracking-widest">Typically responds in minutes</p>
                    </div>
                </div>

                <!-- Chat Messages -->
                <div class="flex-1 p-6 space-y-4 overflow-y-auto bg-[#e5ddd5]/40" style="background-image: url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png'); background-repeat: repeat; background-size: 400px;">
                    <div class="bg-white p-4 rounded-2xl rounded-tl-none shadow-sm max-w-[85%] text-sm relative border border-border/50">
                        <p class="text-foreground/80 leading-relaxed font-medium mb-1">Office of Shyam Interiors</p>
                        <p class="text-foreground/70 leading-relaxed">Hi there! 👋 How can we help you transform your space today? Send us a message below and we'll chat on WhatsApp.</p>
                        <span class="text-[10px] text-muted-foreground mt-1 block text-right">Online</span>
                    </div>
                </div>

                <!-- Chat Input Area -->
                <div class="p-4 bg-background border-t border-border flex items-center gap-3">
                    <input type="text" id="wa-message" placeholder="Type a message to start..." class="flex-1 rounded-full border border-border bg-muted/30 px-5 py-3 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition">
                    <button onclick="sendWhatsAppMessage()" class="grid h-11 w-11 place-items-center rounded-full bg-[#25D366] text-white hover:scale-110 active:scale-95 transition-all shadow-lg hover:shadow-[#25D366]/40">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send">
                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                            <path d="M22 2 11 13"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <script>
                function sendWhatsAppMessage() {
                    const messageBox = document.getElementById('wa-message');
                    const message = messageBox.value;
                    if (message.trim() === '') return;

                    const encodedMessage = encodeURIComponent(message);
                    const whatsappUrl = `https://wa.me/916377170420?text=${encodedMessage}`;
                    window.open(whatsappUrl, '_blank');
                    messageBox.value = ''; // Clear input
                }

                // Handle Enter key for the input
                document.getElementById('wa-message')?.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        sendWhatsAppMessage();
                    }
                });
            </script>
        </div>
    </div>
</section>
<?php
include '../includes/footer.php';
?>