<template>
    <div class="profile mt-5 mb-1">
        <div class="container">
            <div class="pt-4 pb-3 px-4 bg-white shadow-sm mb-4">
                <h2 class="mb-3">Profile settings</h2>
                <form action="/profile/edit" method="post" enctype="multipart/form-data" @submit.prevent="updateUser">
                    <div class="form-group">
                        <img :src="avatar" alt="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Profile image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="avatar" name="avatar" @change="processFile($event)">
                                <label class="custom-file-label" for="avatar">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bio">Short bio</label>
                        <textarea class="form-control" id="bio" name="bio" rows="5" v-model="bio"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control" name="about" id="about" rows="5" v-model="about"></textarea>
                    </div>  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        data: function(){
            return {
                id: this.user.id,
                avatar: this.user.avatar,
                bio: this.user.bio,
                about: this.user.about
            }
        },
        methods: {
            updateUser() {
                console.log('updated');
            },
            processFile(event) {
                let files = event.target.files || event.dataTransfer.files;
                if (!files.length) {
                    return;
                }
                this.createImage(event.target.files[0]);
            },
            createImage(file) {
                let image = new Image();
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.avatar = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    }
</script>
