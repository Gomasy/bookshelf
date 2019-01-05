import Request from './request';
import notify from './notify';
import { options } from './config';

export default class {
    constructor(notifyVue) {
        this.notify = notifyVue;
    }

    getUrl(url, query) {
        url += '?';
        Object.keys(query).map(k => url += k + '=' + query[k] + '&');

        return url.substring(url.length - 1, -1);
    }

    async fetch(query) {
        const resp = await Request.exec(this.getUrl('/list.json', query), options);

        return await resp.json();
    }

    async beforeCreate(sid, type, payload, callback) {
        try {
            const query = { 'sid': sid, 'type': type, 'p': payload };
            const resp = await Request.exec(this.getUrl('/fetch', query), options);
            callback(await resp.json());
        } catch (e) {
            notify(this.notify, e);
        }
    }

    async create(sid, payload) {
        try {
            const body = { 'sid': sid, 'p': payload };
            const resp = await Request.exec('/create', Request.postOptions(body));
            notify(this.notify, resp);

            return await resp.json();
        } catch (e) {
            notify(this.notify, e);
        }
    }

    async delete(ids) {
        return await Request.exec('/delete', Request.postOptions({ ids: ids }));
    }

    async edit(entry) {
        return await Request.exec('/edit', Request.postOptions(entry));
    }
}
