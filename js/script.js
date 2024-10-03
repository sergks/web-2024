console.log('Work')

const user = {
  name: 'Иван',
  age: 22,
  languages: ['ru', 'en'],

  isLanguage(lang) {
    return this.languages.indexOf(lang) !== -1
  },

  addLang(lang) {
    this.languages.push(lang)
  }
}

console.log(user.isLanguage('fr'))
