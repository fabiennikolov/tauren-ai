<div>
    <section class="relative overflow-hidden bg-[#0f0d1b] text-white lg:pb-[445px] lg:pt-36 pt-20 pb-20">
        <!-- Background spots -->
        <div class="absolute inset-0 overflow-hidden blur-3xl">
            <div class="spot-1"></div>
            <div class="spot-2"></div>
            <div class="spot-3"></div>
            <div class="spot-4"></div>
        </div>

        <!-- Content -->
        <div class="container mx-auto text-center relative z-10">
            <h1 class="lg:text-[64px] text-4xl font-bold lg:mb-12 mb-4">Нова ера за вашият бизнес!</h1>
            <p class="lg:text-[32px] text-xl mb-8">С изкуствения интелект на TaurenAI</p>
            <div class="px-12" x-data="textStreamer()" x-init="startStreaming()" class="text-center">
                <p
                    class="text-[#24EABA] mb-8 bg-[#24EABA]/10 w-fit mx-auto text-lg px-2 py-1 font-medium border-[#24EABA] border-b">
                    <span x-text="displayText"></span><span class="blinking-cursor">_</span>
                </p>
            </div>
            <button
                class="rounded-md before:ease relative h-12 w-40 overflow-hidden border border-indigo-700 bg-[#581DFC] text-white transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40">
                <span relative="relative z-10">Запитване</span>
            </button>
        </div>
    </section>
</div>
<script>
    function textStreamer() {
        return {
            fullText: 'Преобразуваме съдържанието на уебсайта ви в опитен чат асистент',
            displayText: '',
            index: 0,
            startStreaming() {
                this.index = 0;
                this.displayText = '';
                this.streamText();
            },
            streamText() {
                if (this.index < this.fullText.length) {
                    this.displayText += this.fullText[this.index];
                    this.index++;
                    setTimeout(() => this.streamText(), 50);
                }
            }
        }
    }
</script>
