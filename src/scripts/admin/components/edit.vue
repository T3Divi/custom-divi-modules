<template>
    <v-app id="haydn-custom-divi-modules-edit">
        <v-content>
        <v-card class="container-card">
            <v-container fluid grid-list-md>
                <v-layout row>
                    <v-flex xs12>
                        <h1>Details</h1>
                    </v-flex>
                </v-layout>
                <v-layout row>
                    <v-flex xs12>
                        <v-text-field
                          name="Name"
                          label="A unique name for the module."
                          id="name"
                        ></v-text-field>
                    </v-flex>
                </v-layout>
                <v-layout row>
                    <v-flex xs12>
                        <v-text-field
                          name="Label"
                          label="The module's display name."
                          id="label"
                        ></v-text-field>
                    </v-flex>
                </v-layout>
                <v-divider></v-divider>
                <v-layout row>
                    <v-flex xs12>
                        <h1>Fields</h1>
                    </v-flex>
                </v-layout>
                <v-layout row>
                    <v-flex xs12>
                        <div class="text-xs-left">
                          <v-chip close><span class="monospace">field_one</span>&nbsp;&nbsp;<strong>Text</strong></v-chip>
                          <v-chip close><span class="monospace">field_two</span>&nbsp;&nbsp;<strong>Text</strong></v-chip>
                          <v-chip close><span class="monospace">field_three</span>&nbsp;&nbsp;<strong>Text</strong></v-chip>
                        </div>
                    </v-flex>
                </v-layout>
                <v-layout row>
                    <v-flex xs4>
                        <v-text-field
                          name="Add Field Name"
                          label="The field's name"
                          id="label"
                        ></v-text-field>
                    </v-flex>
                    <v-flex xs4>
                        <v-select
                          id="haydn-custom-divi-modules-edit-field-type-select"
                          :items="items"
                          v-model="select"
                          label="The field's type"
                          :attach="true"
                        ></v-select>
                    </v-flex>
                    <v-flex xs4>
                        <v-btn color="info">Add Field</v-btn>
                    </v-flex>
                </v-layout>
                <v-divider></v-divider>
                <v-layout row>
                    <v-flex xs12>
                        <h1>Templates</h1>
                        <v-alert type="info" v-model="alert" dismissible transition="scale-transition">
                          You can use fields in the module's HTML template! If a field is labelled <strong><span class="monospace">my_custom_field</span></strong>, then use it in the template by typing <strong><span class="monospace">%%my_custom_field%%</span></strong>.
                        </v-alert>
                    </v-flex>
                </v-layout>
                <v-layout row>
                    <v-flex xs12>
                        <v-text-field
                            name="HTML Template"
                            label="The module's HTML template."
                            id="template"
                            class="monospace"
                            multi-line
                        ></v-text-field>
                    </v-flex>
                </v-layout>
                <v-layout row>
                    <v-flex xs12>
                        <v-text-field
                            name="Custom CSS"
                            label="Add custom CSS to the template."
                            id="template"
                            class="monospace"
                            multi-line
                        ></v-text-field>
                    </v-flex>
                </v-layout>
                <v-divider></v-divider>
                <v-layout row>
                    <v-flex xs12 class="text-xs-right">
                        <v-btn color="info">Save</v-btn>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-card>
        </v-content>
    </v-app>
</template>

<style>

</style>

<script>
    export default {
        data() {
            return {
                active: 1,
                select: null,
                items: [
                  { text: 'Text' },
                  { text: 'Content' },
                  { text: 'Select' }
                ],
                alert: true
            }
        }
    }
</script>
