<template>
    <div class="container">
        <div class="row">
            <chat-message v-for="message in messages" :message="message"></chat-message>
        </div>
    </div>
</template>

<script>
    export default {
    	props: ['messages']
    }
</script>
