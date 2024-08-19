import jQuery from 'jquery';
window.$ = jQuery;
import { createPopperLite as createPopper } from '@popperjs/core';
import 'bootstrap';



// import tinymce from 'tinymce/tinymce';

// // Добавьте дополнительные плагины и темы по мере необходимости
// import 'tinymce/icons/default';
// import 'tinymce/themes/silver';
// import 'tinymce/plugins/link';
// import 'tinymce/plugins/lists';
// import 'tinymce/plugins/image';
// import 'tinymce/plugins/table';

// tinymce.init({
//     selector: 'textarea.tinymce-editor',
//     plugins: 'lists link image table',
//     toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
//     menubar: false
// });