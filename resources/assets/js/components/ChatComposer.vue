<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                	<textarea class="form-control" placeholder="Send text message...." v-model="messageText" @keyup.enter="sendMessage"></textarea>
                	<button type="button" class="btn btn-primary" @click="sendMessage">Send</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    	data() {
    		return {
    			messageText: ''
    		}
    	},

    	methods: {
    		sendMessage() {
    			this.$emit('messagesent', {
    				message: this.messageText,
    				user: 'john Doe'
    			});

    			this.messageText = '';
    		}
    	}
    }
</script>
