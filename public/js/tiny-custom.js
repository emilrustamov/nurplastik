tinymce.init({
    selector: 'textarea',
    plugins: 'image code',
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
    /* enable title field in the Image dialog*/
    image_title: true,
    /* enable automatic uploads of images represented by blob or data URIs*/
    automatic_uploads: true,
    file_picker_types: 'image',
    /* and here's our custom image picker*/
    file_picker_callback: (cb, value, meta) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.addEventListener('change', (e) => {
            const file = e.target.files[0];

            const reader = new FileReader();
            reader.addEventListener('load', () => {
                const id = 'blobid' + (new Date()).getTime();
                const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                const base64 = reader.result.split(',')[1];
                const blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            });
            reader.readAsDataURL(file);
        });

        input.click();
    },
    menu: {
        edit: {
            title: 'Edit',
            items: 'undo redo selectall'
        },
        insert: {
            title: 'Insert',
            items: 'link image'
        },
        view: {
            title: 'View',
            items: 'code'
        }
    },
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});