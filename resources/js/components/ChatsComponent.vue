<template>
    <div class="row">
        <!-- Chat Interface -->
        <div class="col-8">
            <div class="card card-default">
                <div class="card-header">Messages</div>
                <div class="card-body p-0">
                    <ul class="list-unstyled" style="height:300px; overflow-y:scroll">
                        <li class="p-2">
                            <strong>Test-user</strong>
                        </li>
                    </ul>
                </div>
                <input type="text" class="form-control" name="message" placeholder="Enter your message">
                <span class="text-muted">user is typing...</span>
            </div>
        </div>
        <!-- Active Users -->
        <div class="col-4">
            <div class="card card-default">
                <div class="card-header">Active Users</div>
                <div class="card-body">
                    <ul>
                        <li class="py-2">Test User</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
   
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
