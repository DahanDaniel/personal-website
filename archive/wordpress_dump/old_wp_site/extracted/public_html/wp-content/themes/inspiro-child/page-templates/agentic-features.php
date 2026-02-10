<?php
/**
 * Template Name: Agentic Features (Code Based)
 *
 * This template allows for manual coding of the "Vision" and "My Path" sections
 * while maintaining the Inspiro header/footer.
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Custom Code Section: Start -->
        <style>
            .lang-toggle-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: #000;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 30px;
                font-family: sans-serif;
                font-size: 14px;
                cursor: pointer;
                z-index: 9999;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                transition: transform 0.2s;
            }
            .lang-toggle-btn:hover { transform: scale(1.05); }
            /* Default state: Show PL, Hide EN */
            body:not(.show-en) .lang-en { display: none !important; }
            body.show-en .lang-pl { display: none !important; }
        </style>

        <button id="agentic-lang-toggle" class="lang-toggle-btn" onclick="toggleAgenticLang()">PL | EN</button>

        <div class="agentic-container" style="max-width: 1140px; margin: 0 auto; padding: 100px 20px;">
            
            <!-- VISION SECTION -->
            <section id="vision-section" style="margin-bottom: 100px;">
                <h2 class="text-center lang-pl" style="font-family: 'Inter', sans-serif; font-weight: 700; text-transform: uppercase; margin-bottom: 10px; text-align:center;">Algorytm Powrotu</h2>
                <h2 class="text-center lang-en" style="font-family: 'Inter', sans-serif; font-weight: 700; text-transform: uppercase; margin-bottom: 10px; text-align:center;">Algorithm of Return</h2>
                
                <h3 class="text-center lang-pl" style="font-size: 24px; margin-bottom: 60px; text-align:center; font-weight: 300;">Oświecony Świat już tu jest.</h3>
                <h3 class="text-center lang-en" style="font-size: 24px; margin-bottom: 60px; text-align:center; font-weight: 300;">The Awakened World Is Already Here.</h3>

                <div class="vision-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                    <!-- Step 1 -->
                    <div class="vision-item" style="padding: 30px; border: 1px solid #eee; text-align: center;">
                        <span style="font-size: 40px; color: #C5B8A5; font-weight: 700; display: block; margin-bottom: 20px;">01</span>
                        <h3 class="lang-pl" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Impuls</h3>
                        <p class="lang-pl" style="font-size: 14px; color: #666; margin-top: 10px;">Moment zatrzymania. Iskra świadomości.</p>
                        
                        <h3 class="lang-en" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Impulse</h3>
                        <p class="lang-en" style="font-size: 14px; color: #666; margin-top: 10px;">Moment of pause. Spark of consciousness.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="vision-item" style="padding: 30px; border: 1px solid #eee; text-align: center;">
                        <span style="font-size: 40px; color: #C5B8A5; font-weight: 700; display: block; margin-bottom: 20px;">02</span>
                        <h3 class="lang-pl" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Ramy Mentalne</h3>
                        <p class="lang-pl" style="font-size: 14px; color: #666; margin-top: 10px;">Zrozumienie mechanizmów umysłu. Zrobienie miejsca na czucie.</p>

                        <h3 class="lang-en" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Mental Frameworks</h3>
                        <p class="lang-en" style="font-size: 14px; color: #666; margin-top: 10px;">Understanding mind mechanisms. Making space for feeling.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="vision-item" style="padding: 30px; border: 1px solid #eee; text-align: center;">
                        <span style="font-size: 40px; color: #C5B8A5; font-weight: 700; display: block; margin-bottom: 20px;">03</span>
                        <h3 class="lang-pl" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Infrastruktura</h3>
                        <p class="lang-pl" style="font-size: 14px; color: #666; margin-top: 10px;">Budowa Life OS. Wsparcie rozwoju.</p>

                        <h3 class="lang-en" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Infrastructure</h3>
                        <p class="lang-en" style="font-size: 14px; color: #666; margin-top: 10px;">Building Life OS. Supporting growth.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="vision-item" style="padding: 30px; border: 1px solid #eee; text-align: center;">
                        <span style="font-size: 40px; color: #C5B8A5; font-weight: 700; display: block; margin-bottom: 20px;">04</span>
                        <h3 class="lang-pl" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Transformacja</h3>
                        <p class="lang-pl" style="font-size: 14px; color: #666; margin-top: 10px;">Praktyka codzienna. Integracja świadomości.</p>

                        <h3 class="lang-en" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Transformation</h3>
                        <p class="lang-en" style="font-size: 14px; color: #666; margin-top: 10px;">Daily practice. Integrating consciousness.</p>
                    </div>
                    
                    <!-- Step 5 -->
                     <div class="vision-item" style="padding: 30px; border: 1px solid #eee; text-align: center;">
                        <span style="font-size: 40px; color: #C5B8A5; font-weight: 700; display: block; margin-bottom: 20px;">05</span>
                        <h3 class="lang-pl" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Działanie</h3>
                        <p class="lang-pl" style="font-size: 14px; color: #666; margin-top: 10px;">Nowa jakość pracy i relacji. Business OS.</p>

                        <h3 class="lang-en" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Action</h3>
                        <p class="lang-en" style="font-size: 14px; color: #666; margin-top: 10px;">New quality of work and relationships. Business OS.</p>
                    </div>

                     <!-- Step 6 -->
                     <div class="vision-item" style="padding: 30px; border: 1px solid #eee; text-align: center;">
                        <span style="font-size: 40px; color: #C5B8A5; font-weight: 700; display: block; margin-bottom: 20px;">06</span>
                        <h3 class="lang-pl" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Grawitacja</h3>
                        <p class="lang-pl" style="font-size: 14px; color: #666; margin-top: 10px;">Tworzenie wspólnoty. Przyciąganie innych.</p>

                        <h3 class="lang-en" style="font-size: 18px; font-weight: 600; text-transform: uppercase;">Gravity</h3>
                        <p class="lang-en" style="font-size: 14px; color: #666; margin-top: 10px;">Creating community. Attracting others.</p>
                    </div>
                </div>
            </section>

             <!-- MY PATH SECTION -->
             <section id="path-section">
                <h2 class="text-center lang-pl" style="font-family: 'Inter', sans-serif; font-weight: 700; text-transform: uppercase; margin-bottom: 50px; text-align:center;">Moja Droga</h2>
                <h2 class="text-center lang-en" style="font-family: 'Inter', sans-serif; font-weight: 700; text-transform: uppercase; margin-bottom: 50px; text-align:center;">My Path</h2>

                <div class="timeline" style="border-left: 2px solid #eee; padding-left: 30px; margin-left: 20px; max-width: 800px; margin: 0 auto;">
                    <!-- Item 1 -->
                    <div class="timeline-item" style="margin-bottom: 40px; position: relative; padding-left: 20px;">
                        <div class="dot" style="width: 12px; height: 12px; background: #C5B8A5; position: absolute; left: -38px; top: 5px; border-radius: 50%;"></div>
                        <h4 class="lang-pl" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Fundamenty</h4>
                        <p class="lang-pl" style="margin: 0; font-size: 15px; color: #555;">Pływanie wyczynowe, matematyka, kompozycja. Dyscyplina struktury.</p>
                        
                        <h4 class="lang-en" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Foundations</h4>
                        <p class="lang-en" style="margin: 0; font-size: 15px; color: #555;">Competitive swimming, math, composition. The discipline of structure.</p>
                    </div>

                    <!-- Item 2 -->
                    <div class="timeline-item" style="margin-bottom: 40px; position: relative; padding-left: 20px;">
                        <div class="dot" style="width: 12px; height: 12px; background: #C5B8A5; position: absolute; left: -38px; top: 5px; border-radius: 50%;"></div>
                        <h4 class="lang-pl" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Nauka</h4>
                        <p class="lang-pl" style="margin: 0; font-size: 15px; color: #555;">Fizyka Teoretyczna (UW). Rozumienie praw rzeczywistości.</p>
                        
                        <h4 class="lang-en" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Science & Abstraction</h4>
                        <p class="lang-en" style="margin: 0; font-size: 15px; color: #555;">Theoretical Physics. Understanding reality from first principles.</p>
                    </div>

                    <!-- Item 3 -->
                    <div class="timeline-item" style="margin-bottom: 40px; position: relative; padding-left: 20px;">
                        <div class="dot" style="width: 12px; height: 12px; background: #C5B8A5; position: absolute; left: -38px; top: 5px; border-radius: 50%;"></div>
                        <h4 class="lang-pl" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Technologia</h4>
                        <p class="lang-pl" style="margin: 0; font-size: 15px; color: #555;">Programista, Lider w MSD. Budowanie skalowalnych systemów.</p>
                        
                        <h4 class="lang-en" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Technology</h4>
                        <p class="lang-en" style="margin: 0; font-size: 15px; color: #555;">Developer, Leader, Mentor at MSD. Building scalable systems.</p>
                    </div>

                    <!-- Item 4 -->
                    <div class="timeline-item" style="margin-bottom: 40px; position: relative; padding-left: 20px;">
                        <div class="dot" style="width: 12px; height: 12px; background: #C5B8A5; position: absolute; left: -38px; top: 5px; border-radius: 50%;"></div>
                        <h4 class="lang-pl" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Integracja</h4>
                        <p class="lang-pl" style="margin: 0; font-size: 15px; color: #555;">Przedsiębiorca (MIND). Twórca Life OS. Łączenie logiki biznesu z duchem.</p>
                        
                        <h4 class="lang-en" style="margin: 0 0 10px 0; text-transform: uppercase; font-size: 16px; letter-spacing: 1px;">Integration</h4>
                        <p class="lang-en" style="margin: 0; font-size: 15px; color: #555;">Entrepreneur (MIND). Life OS Creator. Bridging business logic with spirit.</p>
                    </div>
                </div>
            </section>

        </div>

        <script>
            function toggleAgenticLang() {
                document.body.classList.toggle('show-en');
                // Save preference
                const isEn = document.body.classList.contains('show-en');
                localStorage.setItem('agentic-lang', isEn ? 'en' : 'pl');
            }

            // Restore preference on load
            (function() {
                const sr = localStorage.getItem('agentic-lang');
                if(sr === 'en') document.body.classList.add('show-en');
            })();
        </script>
        <!-- Custom Code Section: End -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
