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


const colorsTypes = {
    bug: '#A8B820',
    dark: '#705848',
    dragon: '#7038F8',
    electric: '#F8D030',
    fairy : '#EE99AC',
    fighting: '#C03028',
    fire : '#F08030',
    flying : '#A890F0',
    ghost : '#705898',
    grass : '#78C850',
    ground : '#E0C068',
    ice : '#98D8D8',
    normal : '#A8A878',
    poison : '#A040A0',
    psychic : '#F85888',
    rock : '#B8A038',
    steel : '#B8B8D0',
    water : '#6890F0'
};
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