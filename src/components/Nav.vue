<template>
    <div id="menu">
        <img class="activator" id="activator" src="//s.svgbox.net/hero-outline.svg?fill=fff#menu-alt-1" alt="">
        <nav>
            <ul>
                <li><a href="/actus"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#newspaper"></a></li>
                <li><a href="/presentation"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#book-open"></a></li>
                <li><a href="/membres"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#user-group"></a></li>
                <li><a href="/events"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#calendar"></a></li>
                <li><a href="/boutique"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#shopping-cart"></a></li>
                <li><a href="/connexion"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#login"></a></li>
                <li><a href="/profil"><img src="//s.svgbox.net/materialui.svg?fill=805ad5#account_circle"></a></li>
                <li><a href="#"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#logout"></a></li>
            </ul>
        </nav>
    </div>
</template>

<script>
    import gsap from "gsap";

    export default {
        name: 'navMenu',
        mounted() {
            var card = document.getElementById("activator");
            var tl = gsap.timeline({ defaults: { ease: "power2.inOut" } });
            var toggle = false;

            tl.to(".activator", {
                background: "#805ad5",
                borderRadius: "5em 0 0 5em" 
            });
            tl.to("nav",{clipPath: "ellipse(100% 100% at 50% 50%)" },"-=.5");
            tl.to("nav img",{
                opacity: 1,
                transform: "translateX(0)",
                stagger: 0.05 
            },"-=.5");
            tl.pause();
            card.addEventListener("click", () => {
                toggle = !toggle;
                if (toggle ? tl.play() : tl.reverse()) ;
            });
        },
    }
</script>

<style scoped>
    #menu {
        display: flex;
        bottom: 1em;
        left: 1em;
        position: fixed;
        z-index: 2;
    }
    #menu .activator {
        padding: 1em;
        border-radius: 100%;
        cursor: pointer;
        background: #1e2129;
    }
    #menu .activator:hover{
        background: #1e2129;
    }
    img {
        width: 50%;
        max-width: 45px;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    nav {
        background: #292e38;
        border-radius: 0 5em 5em 0;
        padding: 0.5em;
        clip-path: ellipse(50% 50% at -50% 50%);
    }
    nav ul {
        display: flex;
    }
    nav ul li a {
        display: block;
        padding: 0.5em;
        border-radius: 50%;
    }
    nav ul li a:hover {
        background: #323844;
    }
    nav ul li a img {
        opacity: 0;
        transform: translateX(-10px);
    }
</style>
