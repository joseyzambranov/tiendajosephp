/*login show and hidden*/
const signUp =document.getElementById('sign-up'),
      signIn =document.getElementById('sign-in'),
      loginIn =document.getElementById('login-in'),
      loginUp =document.getElementById('login-up')

      signUp.addEventListener('click', ()=>{
        //remove classes first if they exist
        loginIn.classList.remove('block')
        loginUp.classList.remove('none')

        //Add classes   
        loginIn.classList.add('none')
        loginUp.classList.add('block')
      })
      signIn.addEventListener('click', ()=>{
        //remove classes first if they exist
        loginIn.classList.remove('none')
        loginUp.classList.remove('block')

        //Add classes   
        loginIn.classList.add('block')
        loginUp.classList.add('none')
      })