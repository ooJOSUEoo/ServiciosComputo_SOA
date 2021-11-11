titulo()
function titulo() {
    var words = [' SERVICIOS DE COMPUTO ',''],
        wordWrapper = document.getElementById('tituloPr'),
        wordWrapperContent = wordWrapper.innerHTML,
        addingWord = false,
        counter = 1;

    setInterval(function () {

        if (wordWrapperContent.length > 0 && !addingWord) {
            wordWrapper.innerHTML = wordWrapperContent.slice(0, -1);
            wordWrapperContent = wordWrapper.innerHTML;
        } else {
            addingWord = true;
        }

        if (addingWord) {
            if (wordWrapperContent.length < words[counter].length) {
                wordWrapper.innerHTML = words[counter].slice(0, wordWrapperContent.length + 1);
                wordWrapperContent = wordWrapper.innerHTML;
            } else {
                if (counter < words.length) {
                    counter++
                }
                addingWord = false;
            }
        }

        if (counter == words.length) {
            counter = 0;
        }

    }, 200);
}