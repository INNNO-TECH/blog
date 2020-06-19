<template>
    <div>
        <pre>{{ testingData }}</pre>
        <table class="table">
					<tr>
						<th>ID</th>
						<th>Post Name</th>
						<th>Author</th>
					</tr>
					<tr v-for="testData in testingData" :key="testData.id">
						<td>{{ testData.id }}</td>
						<td>{{ testData. name }}</td>
						<td>{{ testData.author }}</td>
					</tr>
				</table>
        {{ winmarnoo }}
    </div>
</template>
<script>
    export default {
        data () {
            return {
                testingData: [],
                winmarnoo: 'I am Win Marn Oo'
            }
        },
        created () {
            axios.get('/test') //call api call [ ----Route::get('/test','PostController@test');-----]
            .then (response => {
                console.log(response)
                this.testingData = response.data
            })
        }
    }
</script>
<style >

</style>