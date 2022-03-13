const pokemonCard = Array.from(document.querySelectorAll('.pokemon-card'))
const modalContainer = document.querySelector('.pokemon-modal')
const modal = document.querySelector('.pokemon-modal-cotent')
const modalButtonClose = document.querySelector('.modal-close-button')
console.log(pokemonCard, modalContainer);

pokemonCard.forEach(pokemon => {
    pokemon.addEventListener('click', () => handleClickPokemonCard(pokemon))
})
function handleClickPokemonCard(pokemon) {
    modal.innerHTML = ''
    modalContainer.classList.add('active')
    const data = getDataSetPokemon(pokemon)
    setDataIntoModel(data)
}
function getDataSetPokemon(pokemon) {
    const data = {
        id: pokemon.dataset.id,
        name: pokemon.dataset.name,
        type: pokemon.dataset.typeprimary, 
    }
    return data
}
function setDataIntoModel(data) {
    
}

modalButtonClose.addEventListener('click', () => {
    modalContainer.classList.remove('active')
})