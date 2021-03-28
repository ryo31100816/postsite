import {extend} from 'vee-validate';
import {email, required} from 'vee-validate/dist/rules';
 
export default function apendExtendRules() {
    extend('required', required)
    extend('max-str-len', {
        validate(value, args) {
            return value.length <= args.length;
        },
        params: ['length'],
        message: '{_field_}は{length}文字以下である必要があります。',
    });
}