// Description: Add a parameter to the URL
function getQueryParams() {
  let params = {};
  let search = window.location.search.substring(1); // URLのクエリ部分を取得し、先頭の?を取り除く
  if (search) {
    search.split("&").forEach(function (item) {
      // &で区切られたクエリパラメータを分割
      let parts = item.split("=");
      console.log(parts);
      params[decodeURIComponent(parts[0])] = decodeURIComponent(parts[1] || "");
    });
  }
  console.log(params);
  return params;
}

function addQueryParamsToLinks() {
  const params = getInitialQueryParams();
  if (Object.keys(params).length) return;

  const queryString = Object.keys(params)
    .map(
      (key) => encodeURIComponent(key) + "=" + encodeURIComponent(params[key])
    )
    .join("&");

  const links = document.querySelectorAll("a.param-link");
  links.forEach((link) => {
    let url = link.getAttribute("href");
    if (url.search) {
      url.search += "&" + queryString;
    } else {
      url.search = "?" + queryString;
    }

    linkhref = url.toString();
  });
}

function getInitialQueryParams() {
  let initialParams = localStorage.getItem("initial_query_params");
  if (initialParams) {
    return JSON.parse(initialParams);
  } else {
    const params = getQueryParams();
  }
}

function setCookie(name, value, days) {
  const expires = new Date(Date.now() + days * 864e5).toUTCString();
  document.cookie =
    name +
    "=" +
    encodeURIComponent(value) +
    "; expires=" +
    expires +
    "; path=/";
}

function getCookie(name) {
  return document.cookie.split("; ").reduce((r, v) => {
    const parts = v.split("=");
    return parts[0] === name ? decodeURIComponent(parts[1]) : r;
  }, "");
}

// Description: Add a parameter to the URL
function getQueryParams() {
  let params = {};
  let search = window.location.search.substring(1); // URLのクエリ部分を取得し、先頭の?を取り除く
  if (search) {
    search.split("&").forEach(function (item) {
      // &で区切られたクエリパラメータを分割
      let parts = item.split("=");
      console.log(parts);
      params[decodeURIComponent(parts[0])] = decodeURIComponent(parts[1] || "");
    });
  }
  console.log(params);
  return params;
}

function redirectWithQueryParams(url) {
  const params = getQueryParams();
  let query = Object.keys(params)
    .map(
      (key) => encodeURIComponent(key) + "=" + encodeURIComponent(params[key])
    )
    .join("&");

  const hasExistingParams = url.includes("?");

  if (Object.keys(params).length > 0) {
    // クエリパラメータが存在する場合
    query += "&source=current";
    const newUrl = `${url}${hasExistingParams ? "&" : "?"}${query}`;
    window.location.href = newUrl;
  } else {
    // クエリパラメータが存在しない場合、localStorageから取得
    const initialParams = localStorage.getItem("initial_query_params");
    if (initialParams) {
      query = initialParams + "&source=localStorage";
      const newUrl = `${url}${hasExistingParams ? "&" : "?"}${query}`;
      window.location.href = newUrl;
    } else {
      // 初期のクエリパラメータがない場合
      window.location.href = url;
    }
  }
}

window.getQueryParams = getQueryParams;
window.setCookie = setCookie;
window.getCookie = getCookie;
window.redirectWithQueryParams = redirectWithQueryParams;