<div class="posting_change">
                <div class="data-posting">
                    <form action="">
                        <div class="text-input">
                            <input type="text" name="" id="" placeholder="Title">
                        </div>
                        <div class="text-input">
                            <input type="text" name="" id="" placeholder="Subtitle">
                        </div>

                        <div class="file-input">
                            <label for="">old poster</label>
                            <div class="poster">
                                <img src="" alt="">
                                <span class="mark"><p>?</p></span>
                            </div>

                            <input type="file" id="main-input" class="main-input">
                            <span class="knob-input" id="knob-input">upload</span>
                            <span class="name-input" id="name-input"> : name poster</span>

                        </div>

                        <div class="main-content">
                            <textarea name="editor1" id="editor1" rows="10" cols="80">
                                This is my textarea to be replaced with CKEditor 4.
                            </textarea>

                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1', {
                                    height: 600,
                                    filebrowserUploadUrl : 'upload.php',
                                    filebrowserUploadMethod : 'form'
                                });
                            </script>
                        </div>

                        <div class="knob-input">
                            <button class="">update</button>
                        </div>

                    </form>
                </div>
            </div>