document.addEventListener('DOMContentLoaded', () => {

    const uploadButton = document.getElementById('upload-button');
    const imagesContainer = document.getElementById('house-images-container');
    const houseImagesInput = document.getElementById('house_images');

    uploadButton.addEventListener('click', (e) => {
        e.preventDefault();

        let frame = wp.media({
            title: 'Bilder hinzufügen',
            button: {
                text: 'Bilder hinzufügen'
            },
            multiple: true
        });

        frame.on('select', () => {
            let selection = frame.state().get('selection');
            let imageIds = [];
            imagesContainer.innerHTML = '';


            selection.forEach((image) => {
                let imageId = image.id;
                let imageUrl = image.attributes.url;

                let newImage = document.createElement('div');
                newImage.classList.add('gallery-item');
                newImage.innerHTML = `
            <img src="${imageUrl}" class="gallery-img" id="${imageId}">
            <button class="remove-image">✖</button>
        `;

                imagesContainer.appendChild(newImage);


                imageIds.push(imageId);
            });

            houseImagesInput.value = imageIds.join(',');

        });

        frame.open();
    });

    imagesContainer.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-image')) {
            let removedImageId = e.target.parentElement.querySelector('img').id;

            let imageIds = houseImagesInput.value.split(',');

            imageIds = imageIds.filter(id => id !== removedImageId);

            houseImagesInput.value = imageIds.join(',');
            e.target.parentElement.remove();
        }
    });

});
