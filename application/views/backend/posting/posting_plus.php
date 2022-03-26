<div class="posting_plus">
                <div class="data-posting">
                    <form action="">
                        <div class="text-input">
                            <input type="text" placeholder="Title">
                        </div>
                        <div class="text-input">
                            <input type="text" placeholder="Sub Title">
                        </div>

                        <div class="file-input">
                            <input id="main-upload" type="file" name="" id="">
                            <div class="poster">
                                <img src="imgs/" alt="">
                                <span class="mark"><p>?</p></span>
                            </div>
                            <br>
                            <span id="upload-knob" class="knob-file">upload</span> : <span class="upload-name" id="upload-name">poster name</span>
                        </div>

                        <div class="text-maincontent">
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

                        <div class="knob">
                            <button type="submit">posting</button>
                        </div>

                    </form>
                </div>
            </div>
