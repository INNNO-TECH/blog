<template>
    <div>
        <h1>opfipsaidfpisfd</h1>
        <pre>{{ testData }}</pre>
        {{ winmarnoo }}
    </div>
</template>
<script>
    export default {
        data () {
            return {
                testData: [],
                winmarnoo: 'I am Win Marn Oo'
            }
        },
        created () {
            axios.get('/test') //call api call [ ----Route::get('/test','PostController@test');-----]
            .then (response => {
                console.log(response)
                this.testData = response.data
            })
        }
    }
</script>
<style >

</style>