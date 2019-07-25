<template>
     <div class="container">                 
            <div class="row" :key="0" v-for="post in posts">
                <div class="col-sm-12">
                    <h2><a href="{{route('article', $article->slug)}}">{{post.title}}</a></h2>
                    <p>{{post.description_short}}<p>
                </div>
            </div>
        
            <h2 class="text-center" v-if="posts == null">Пусто</h2>
        
    </div>
</template>

<script>
    export default {
        props: [
            'posts' 
        ],
        mounted() {
           this.update()
        },
        methods: {
            update: function() {
                console.log(this.props)
            }
        }
    }
</script>
