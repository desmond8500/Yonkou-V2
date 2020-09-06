<template>
    <div>
        <footer id="footer-fixed" class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Single Widget -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-widget about">
                                <div class="logo">
                                    <!-- Text Logo -->
                                    <div class="text-logo">
                                        <a :href="footer.link">{{ footer.name }}</a>
                                    </div>
                                    <!-- Image Logo
                                    <div class="img-logo">
                                        <a href="index.html"><img src="precon-master/images/logo.png" alt="logo"></a>
                                    </div>-->
                                </div>
                                <p>{{ footer.description }}</p>
                                <div class="social">
                                    <h4>Restez connectés</h4>
                                    <ul class="social-icons">
                                        <li  v-for="social in socials" :key="social.id">
                                            <a :href="social.link"><i :class="social.icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="col-lg-2 col-md-6 col-12">
                            <div class="single-widget lists">
                                <h2>Liens Utiles</h2>
                                <ul class="list">
                                    <li v-for="link in links" :key="link.id">
                                        <a :href="link.link"><i class="fa fa-angle-right"></i>{{ link.name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Gallery Widget -->
                            <div class="single-widget photo-gallery">
                                <h2>Photos</h2>
                                <ul class="list">
                                    <li v-for="image in images" :key="image">
                                        <a :href="image" data-fancybox="photo"><img :src="image" alt="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ End Gallery Widget -->
                        </div>
                        <!-- Single Widget -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget contact">
                                <h2>Adresse</h2>
                                <p>consectetur adipiscing elit. Sed lacus purus, auctor a eros consequat</p>
                                <ul class="list">
                                    <li><i class="fa fa-home"></i>786 Brilon City, United Kingdom</li>
                                    <li><i class="fa fa-phone"></i>(123) 457 534 4444</li>
                                    <li><i class="fa fa-paper-plane"></i><a href="mailto:info@precon.com">info@youremail.com</a></li>
                                    <li><i class="fa fa-paper-plane"></i><a href="mailto:support@precon.com">support@youremail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-inner">
                                <p>&#9400; Copyright <a href="#">Precon</a>. Design & Development By <a href="http://themelamp.com">Themelamp.com</a> Template Provide By <a href="https://www.codeglim.com">Codeglim.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Footer Bottom -->
        </footer>
    </div>
</template>

<script>
export default {
    data(){
        return {
            footer: {
                name: 'Tyto',
                description: '',
                link: '/',
            },
            socials: [
                { id: 1, name: 'Facebook', icon: 'fa fa-facebook', link: '' },
                { id: 2, name: 'Linkedin', icon: 'fa fa-linkedin', link: '' },
                { id: 3, name: 'Twitter', icon: 'fa fa-twitter', link: '' },
                { id: 4, name: 'Dribble', icon: 'fa fa-dribble', link: '' },
                { id: 5, name: 'Youtube', icon: 'fa fa-youtube', link: '' },
            ],
            images: [
                "precon-master/images/gallery-1.jpg",
                "precon-master/images/gallery-2.jpg",
                "precon-master/images/gallery-3.jpg",
                "precon-master/images/gallery-4.jpg",
                "precon-master/images/gallery-5.jpg",
                "precon-master/images/gallery-6.jpg",
                "precon-master/images/gallery-7.jpg",
                "precon-master/images/gallery-8.jpg",
                "precon-master/images/gallery-9.jpg",
            ],
            links: [
                { name: 'lien', link: '' },
            ]
        }
    }
}
</script>

<style>

</style>
