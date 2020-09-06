<template>
    <div class="partner-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-slider">
                        <div class="single-slide" v-for="partner in partners" :key="partner.id">
                            <img :src="partner.logo" alt="#">
                            <div class="slide-hover"><a :href="partner.link" target="_blank">{{ partner.name }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            partners: [
                {
                    id: 1,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 2,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 3,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 4,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 5,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 6,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 7,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 8,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
                {
                    id: 9,
                    name: 'Laravel',
                    logo: 'https://blog.simpledev.fr/storage/canvas/images/wfzbmDKhfDuDjCWTZTfpHMxZC1I6BjKj0lWis51k.png',
                    link: 'https://laravel.com/',
                },
            ]
        }
    }
}
</script>

<style>

</style>


