<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ message.user }}</div>

                    <div class="panel-body">
                        {{ message.message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    	props: ['message']
    }
</script>
