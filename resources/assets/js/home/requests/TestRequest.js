import ApiRequest from "../../common/lib/ApiRequest";

export default class TestRequest extends ApiRequest
{
    getTest() {
        let url = '/test';
        let method = 'GET';
        return this.sendRequest(url, method);
    }
}