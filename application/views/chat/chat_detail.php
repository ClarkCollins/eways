
<style>
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .row, #div-media{
            margin: auto;
            min-width: 300px;
        }
        #qstBTN{
            float: left;
            margin-top: 3px;
            margin-left: 10px;
        }
        #myDIV{
            display:none;
        }

    } 

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 500px) {
        .row, #div-media{
            margin: auto;
            min-width: 500px;
        }
        #qstBTN{
            float: left;
            margin-top: 3px;
            margin-left: 20px;
        }
        #chat-title{
            margin-top: 30px;
            margin-right:150px;
        }
        #myDIV{
            display:none;
        }
    } 

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .row, #div-media{
            margin: auto;
            min-width: 668px;
        }
        #chat-title{
            margin-top: 50px;
            margin-right: 320px;
        }
        #qstBTN{
            margin-left: 20px;
        }
        #myDIV{
            display:none;
        }
    } 
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        #qstBTN{
            position:absolute; 
            margin-top: 1px;
            margin-left: 265px;
        }
        #chat-title{
            margin: auto;
        }
        #myDIV{
            display:none;
        }
    } 

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        #qstBT{
            float: left;
        }
        #chat-title{
            margin: auto;
        }
        #myDIV{
            display:none; width:600px;
        }
    }
</style>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none" || x.style.display === "") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<body style="background-color: #F5F5F5">
    <div style="margin-bottom: 400px;">

        <!-- Page Heading -->
        <h4  align="center" style="padding-bottom:5px; padding-top: 40px"class="my-4">
            <p id="chat-title"><?php echo $this->input->get('title') ?></p>
        </h4>
        
            <div class="row">
                <div id="div-media" class="col-lg-8 col-sm-8 portfolio-item">
                    <p id="testing_br" style="white-space: pre-wrap; background-color:#d7d8d8;border-radius: 1%;padding-left: 20px;padding-top: 5px;padding-bottom: 5px;"><?php echo $this->input->get('body') ?></p>
               </div>
            </div>
        <div class="row">
            <div id="div-media" class="col-lg-8 col-sm-8 portfolio-item">
<!--                <textarea id="demo-editor-bootstrap" disabled="Yes" style="background-color:#d7d8d8;border-radius: 1%;padding-left: 20px;padding-top: 5px;padding-bottom: 5px; resize: none;outline: none" cols="50"  class="form-control"><?php echo $this->input->get('body') ?></textarea>-->
                <?php if($meg5 != "Closed"):?>
                <small><a id="qstBT" href="#" onclick="myFunction()">Post a Comment</a></small><br>
                <?php endif?>
                <hr>
                <div id="value" style="color: #4CAF50"></div>
                <div id="myDIV">
                    <form name="submit_comment">
                        <input hidden type="number" name="chatID" id="chatID" value="<?php echo $meg1 ?>">
                        <b><label>Comment:</label></b>
                        <textarea id="comment" name="comment" style="margin-top: 1px;" rows="6" cols="50" class="form-control" placeholder="enter your comment" autofocus></textarea>
                        <input style="margin-bottom: 5px;margin-top: 5px" name="submit" value="Post" type="submit" class="btn-submit pull-right submit btn-info"><br><br>
                    </form>
                </div>
                <div id="convo">
                     <?php $this->load->view('chat/chat_conversation');?>
                </div>
                            

            </div>
        </div>
    </div>
    <script>
    </script>
    <script src="<?php echo base_url() ?>assets/js/text-editor.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url() ?>assets/js/post_comment.js"></script>
