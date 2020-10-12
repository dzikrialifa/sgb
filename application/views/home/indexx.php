<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php //echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
<div id="content">

    <input type="file" name="userfile" size="20" />

</div>

<br /><br />

<input type="submit" value="upload" />

</form>

<button type="submit" id="tambah">Tambah upload</button>

<script>
    const btn = document.getElementById('tambah');
    const div = document.getElementById('content');

    const p = document.createElement('p');
    const text = document.createTextNode('ahahaha');
    p.appendChild(text);
    btn.addEventListener('click', () => {
        div.appendChild(p);
        // alert('ok')
        // btn.setAttribute('name','form-control');
        // btn.classList.add('llo','sad')
    })
</script>
</body>
</html>