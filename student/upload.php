<title>File Upload Form</title>
	<style>
        input[type="file"] {
            display: none;
        }

        .file-upload {
            position: relative;
            width: 200px;
            height: 30px;
            overflow: hidden;
            background: transparent;
            color: #000;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }

        .file-upload input[type="text"] {
            width: 100%;
            box-sizing: border-box;
            border: none;
            padding: 6px 12px;
            outline: none;
        }

        .file-upload.invalid {
            border: 1px solid red;
			box-shadow: 0 0 5px red;
        }

        .file-upload.valid {
            border: 1px solid green;
			box-shadow: 0 0 5px green;
        }

        .notification {
            color: red;
            font-size: 12px;
            display: none;
        }
        input[type="submit"] {
            display: block;
            width: 150px;
            height: 40px;
            margin: 20px auto;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="student/controller2.php?action=file" required="true" method="post" enctype="multipart/form-data">   
        <label class="file-upload" id="fileUploadLabel">
            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Choose file here
            <input required="true" type="file" name="file" id="file" onchange="updatePlaceholder(this)">
        </label>
    
        <input type="text" id="filePlaceholder" class="form-control input-md" readonly>
        <div class="notification" id="notification">File must be a PDF.</div>
        <input  type="submit" value="Upload File" name="submit">
    </form>

    <script>
        function updatePlaceholder(input) {
            var filePath = input.value;
            var fileExtension = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
            var fileUploadLabel = document.getElementById('fileUploadLabel');
            var notification = document.getElementById('notification');

            if (fileExtension === 'pdf') {
                fileUploadLabel.classList.remove('invalid');
                fileUploadLabel.classList.add('valid');
                notification.style.display = 'none';
            } else {
                fileUploadLabel.classList.remove('valid');
                fileUploadLabel.classList.add('invalid');
                notification.style.display = 'block';
            }

            document.getElementById('filePlaceholder').value = input.files[0] ? input.files[0].name : '';
        }
    </script>

<tr>

<td></td>
    <td colspan="5">	
    <h3>Your File <a style="color: blue" href="<?php echo web_root.'student/'.  $res->file; ?>">View</a></h3>
    <input type="text" class="form-control input-md" readonly value="<?php echo $res->file; ?>">
    

    </td>
</tr>