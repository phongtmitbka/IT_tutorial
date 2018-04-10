import LessonRequest from '../components/requests/LessonRequest';
import CourseRequest from '../components/requests/CourseRequest';

const requestMap = {
  LessonRequest,
  CourseRequest
}

const instances = {};

export default class RequestStore {

    static getRequest(classname) {
        let RequestClass = requestMap[classname];
        if (!RequestClass) {
            throw new Error('Invalid request class name: ' + classname);
        }

        let requestInstance = instances[classname];
        if (!requestInstance) {
            requestInstance = new RequestClass();
            instances[classname] = requestInstance;
        }

        return requestInstance;
    }

}