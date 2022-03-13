const pokemonCard = Array.from(document.querySelectorAll('.pokemon-card'))
const modalContainer = document.querySelector('.pokemon-modal')
const modalButtonClose = document.querySelector('.modal-close-button')

const modalId = document.querySelector('.modal-id')
const modalName = document.querySelector('.modal-name')
const modalImg = document.querySelector('.modal-img')
const modalHeight = document.querySelector('.modal-height')
const modalWeight = document.querySelector('.modal-weight')
const modalBaseXp = document.querySelector('.base-experience')
const modalType = document.querySelector('.modal-type')
console.log(modalId);

pokemonCard.forEach(pokemon => {
    pokemon.addEventListener('click', () => handleClickPokemonCard(pokemon))
})
function handleClickPokemonCard(pokemon) {
    modalContainer.classList.add('active')
    const data = getDataSetPokemon(pokemon)
    setDataIntoModel(data)
}
function getDataSetPokemon(pokemon) {
    const data = {
        id: pokemon.dataset.id,
        name: pokemon.dataset.name,
        type_primary: pokemon.dataset.typeprimary,
        img: pokemon.dataset.img,
        height: pokemon.dataset.height,
        weight: pokemon.dataset.weight,
        basexp: pokemon.dataset.basexp
    }
    console.log(data);
    return data
}
function setDataIntoModel(data) {
    modalImg.src = data.img
    modalId.innerHTML = 'Id: ' + data.id
    modalName.innerHTML = 'Name: ' + data.name
    modalHeight.innerHTML = 'Altura: ' + data.height
    modalWeight.innerHTML = 'Peso: ' + data.weight
    modalBaseXp.innerHTML = 'BaseXp: ' + data.basexp
    modalType.innerHTML = 'Tipo Primário: ' + data.type_primary
}

modalButtonClose.addEventListener('click', () => {
    modalContainer.classList.remove('active')
})