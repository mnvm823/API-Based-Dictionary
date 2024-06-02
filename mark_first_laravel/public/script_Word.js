const url = "https://api.dictionaryapi.dev/api/v2/entries/en/";
const result= document.getElementById("result_Word");
const sound = document.getElementById("sound");
const btn = document.getElementById("search-btn_Word");

//variables for the API, for the form inputs from HTML

//initializing the button click of SEARCH
btn.addEventListener("click", () => {
    let inpWord = document.getElementById("inp-word").value;
    fetch(`${url}${inpWord}`) // getting
        .then((response) => response.json())
        .then((data) => {

            //test console for data retrieval
            console.log(data);
            
            result.innerHTML = `
            <div class="word">
                    <h3>${inpWord}</h3>
                </div>
                <div class="details">
                    <p>${data[0].meanings[0].partOfSpeech}</p>
                    <p>/${data[0].phonetic}/</p>
                </div>
                <p class="word-meaning">
                   ${data[0].meanings[0].definitions[0].definition}
                </p>
                <p class="word-example">
                    ${data[0].meanings[0].definitions[0].example || ""}
                </p>
                <p class="word-synonym">
                    Synonyms: ${data[0].meanings[0].synonyms}
                </p>

                <p class="word-synonym">
                    Antonyms: ${data[0].meanings[0].antonyms}
                </p>   
                `;
        })
        .catch(() => {
            result_Word.innerHTML = `<h3 class="error">Couldn't Find The Word</h3>`;
        });
});

        

