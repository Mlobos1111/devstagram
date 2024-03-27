 import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: "Sube aqui tu imagen",
    acceptedFiles: '.png, .gif, .jpeg, .jpg',
    dictRemoveFile: 'Eliminar imagen',
    addRemoveLinks: true,
    maxFiles: 1,
    uploadMulti: false,
}); 

dropzone.on('sending', (file, xhr,formData) => {
    console.log(file);

})
dropzone.on('success', (file, response) => {
    console.log(response);
})
dropzone.on('error', (file, message) => {
    console.log(message);
})
dropzone.on('removedfile', () => {
    console.log('archivo eliminado');
})





