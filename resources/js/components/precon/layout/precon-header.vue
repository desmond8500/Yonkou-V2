<template>
    <!-- Start Header -->
    <header class="header">
        <!-- <precon-topbar></precon-topbar> -->

        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <!-- Text Logo -->
                            <div class="text-logo">
                                <a :href="app.link">{{ app.name }}.</a>
                            </div>
                            <!-- Image Logo
                            <div class="img-logo">
                                <a href="index.html"><img src="precon-master/images/logo.png" alt="logo"></a>
                            </div>-->
                        </div>
                        <!-- Mobile Menu -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-10 col-12">
                        <div class="main-menu-bar">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <ul class="nav menu navbar-nav">
                                            <!-- <li class="active"><a href="index.html">Home</a></li> -->
                                            <li v-for="menu in menus" :key="menu.id">
                                                <a :href="menu.link">{{ menu.name }}</a>
                                            </li>
                                            <!-- <li><a href="services.html">Our Services</a></li>
                                            <li><a href="team.html">Creative Team</a></li>
                                            <li><a href="faqs.html">Faqs</a></li>
                                            <li><a href="contact.html">Contact Us</a></li> -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->
</template>

<script>
export default {
    name: 'preconHeader',
    data() {
        return {
            app: {
                name: 'Tyto',
                link: '/',
            },
            menus: [
                { id: 1, name: 'Acceuil', link: '/' }
            ]
        }
    }
}
</script>

<style>

</style>
