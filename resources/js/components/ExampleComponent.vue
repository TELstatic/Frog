<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to Frog!</div>

                    <div class="card-body">
                        Hello {{user.name}}.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            user: {
                required: true,
                type: Object,
            },
        },
        mounted() {
            console.log('Component mounted.')
        },
    };
</script>
