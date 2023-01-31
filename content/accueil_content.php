<main>
    <section class="main-section">
        <div class="block-gauche">
            <div class="container">
                <h1>Olena Ilchenko</h1>
                <div id="typed-strings">
                    <p>Typed.js is a <strong>JavaScript</strong> library.</p>
                </div>
                <div class="typed-container">
                    <span id="typed"></span>
                </div>
            </div>
        </div>
        <div class="block-droite">
            <blockquote class="phrase">
                <p>- Les sites web sont créés pour les gens, pas pour les robots.</p>
            </blockquote>
            <div class="wrapper-code">
                <pre class="language-scss">
<code><span class="token command">@use</span> <span class="token schema">"variables"</span><span class="token punctuation-spec">;</span>
<span class="token command">@use</span> <span class="token schema">"mixin"</span><span class="token punctuation-spec">;</span>

<span class="token selector">.fig_1<span class="token punctuation-spec">,</span> .fig_2<span class="token punctuation-spec">,</span> .fig_3<span class="token punctuation-spec">,</span> .fig_4</span><span class="token punctuation">{</span>
    <span class="token command">@include</span> mixin<span class="token punctuation-spec">.</span><span class="token name">figure</span><span class="token command">(</span>variables<span class="token punctuation-spec">.</span>$size<span class="token punctuation-spec">,</span> <span class="token punctuation-spec">false</span><span class="token command">)</span><span class="token punctuation-spec">;</span>
    <span class="token property">background-color</span><span class="token punctuation-spec">:</span> variables<span class="token punctuation-spec">.</span>$primary-color<span class="token punctuation-spec">;</span>
    <span class="token command">@include</span> mixin<span class="token punctuation-spec">.</span><span class="token name">margin</span><span class="token command">(</span><span class="token value">10px</span><span class="token command">)</span><span class="token punctuation-spec">;</span>
<span class="token punctuation">}</span>
</code>
                </pre>
            </div>
        </div>
    </section>
</main>