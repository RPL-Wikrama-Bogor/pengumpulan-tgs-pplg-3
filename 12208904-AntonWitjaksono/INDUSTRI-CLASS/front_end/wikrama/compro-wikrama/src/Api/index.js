async function Get(url) {
    return fetch(url).them((res) => res.json);
}

export { Get };