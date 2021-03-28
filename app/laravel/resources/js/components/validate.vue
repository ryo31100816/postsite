<template>
    <div class="container">
      <h1>バリデートテスト</h1>
      <!-- <Validation-observer slim ref="obs" v-slot="{invalid, validated, valid}"> -->
        <sub-validate v-model="main" :test="test"></sub-validate>
        <h5>これはoldやで
        {{ data }}
        </h5>
        <button type="submit" :disabled="!valid" class="btn btn-primary">go</button>
      <!-- </Validation-observer> -->
    </div>
</template>

<script>

import SubValidate from './validate_sub';
import { ValidationProvider, ValidationObserver } from 'vee-validate';
import { extend } from 'vee-validate';

import appendExtendRules from '../validate_rules';
appendExtendRules();

export default {
  components: {
    ValidationProvider,
    ValidationObserver,
    SubValidate,
  },
  props: {
    data: {}
  },
  data() {
    return {
      test: {
        dataa: [{0: 'あ', 1: 'い', 2: 'う'}, {0: 'を', 1: 'は', 2: 'ん'}],
        datab: [{a: 'え', b: 'お', c: 'か'}, {a: 'は', b: 'ま', c: 'や'}]
      },
      main: '',
    }
  }
};

</script>
