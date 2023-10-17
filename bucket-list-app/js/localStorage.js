export function getUserData() {
    let storedUserData = localStorage.getItem('user');
    return storedUserData !== null ? JSON.parse(storedUserData) : {email: "", password: ""};
}

export function setSessionData(key, value) {
    sessionStorage.setItem(key, value);
}
