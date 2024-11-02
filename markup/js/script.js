const number = 10
let string = '10.5'

const user = {
  id: 1,
  name: 'Иван',
  languages: ['ru', 'en', 'fr'],

  hasLang(searchLang) {
    return this.languages.indexOf(searchLang) !== -1
  }
}

const hasLang = function (languages, searchLang) {
  return languages.indexOf(searchLang) !== -1
}

const hasLang2 = (languages, searchLang) => {
  return languages.indexOf(searchLang) !== -1
}

const hasLang3 = (languages) => languages.indexOf('ru') !== -1

const hasLang4 = languages => languages.indexOf('ru') !== -1

user.languages.forEach((item) => {
  console.log(item)
})