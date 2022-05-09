<template>
    <footer class="footer-basic py-2 bg-dark fixed-bottom">
        <div class="social">
            <a href="https://www.instagram.com/?hl=fr">
                <fa :icon="['fab', 'instagram']" style="color: #E1306C"/>
            </a>
            <a href="https://www.snapchat.com/l/fr-fr/download">
                <fa :icon="['fab', 'snapchat']" style="color: #FFFC00"/>
            </a>
            <a href="https://twitter.com/?lang=fr">
                <fa :icon="['fab', 'twitter']" style="color: #1DA1F2"/>
            </a>
            <a href="https://fr-fr.facebook.com/">
                <fa :icon="['fab', 'facebook']" style="color: #3b5998"/>   
            </a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="accueil">Accueil</a>
            </li>
            <li class="list-inline-item">
                <a href="events">Evènements</a>
            </li>
            <li class="list-inline-item">
                <a href="#">A propros</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Termes</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Politique de confidentialité</a>
            </li>
        </ul>
        <p class="copyright">Nocturn © 2022</p>
    </footer>
    
</template>

<script>
    export default {
        name:'footerRs'
    }
</script>

<style scoped>
    .footer-basic {
        padding:40px 0;
        color:#83388d;
        position: relative;
    }

    .footer-basic ul {
        padding:0;
        list-style:none;
        text-align:center;
        font-size:18px;
        line-height:1.6;
        margin-bottom:0;
    }

    .footer-basic li {
        padding:0 10px;
    }

    .footer-basic ul a {
        color:inherit;
        text-decoration:none;
        opacity:0.8;
    }

    .footer-basic ul a:hover {
        opacity:1;
    }

    .footer-basic .social {
        text-align:center;
        padding-bottom:25px;
    }

    .footer-basic .social > a {
        font-size:24px;
        width:40px;
        height:40px;
        line-height:40px;
        display:inline-block;
        text-align:center;
        border-radius:50%;
        border:1px solid #ccc;
        margin:0 8px;
        color:inherit;
        opacity:0.75;
    }

    .footer-basic .social > a:hover {
        opacity:0.6;
    }

    .footer-basic .copyright {
        margin-top:15px;
        text-align:center;
        font-size:13px;
        color:#aaa;
        margin-bottom:0;
    }
</style>
