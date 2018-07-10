<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Verses Controller
 *
 * @property \App\Model\Table\VersesTable $Verses
 *
 * @method \App\Model\Entity\Verse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VersesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $verses = $this->paginate($this->Verses);

        $this->set(compact('verses'));
    }

    /**
     * View method
     *
     * @param string|null $id Verse id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $verse = $this->Verses->get($id, [
            'contain' => []
        ]);

        $this->set('verse', $verse);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $verse = $this->Verses->newEntity();
        if ($this->request->is('post')) {
            $verse = $this->Verses->patchEntity($verse, $this->request->getData());
            if ($this->Verses->save($verse)) {
                $this->Flash->success(__('The verse has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The verse could not be saved. Please, try again.'));
        }
        $this->set(compact('verse'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Verse id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $verse = $this->Verses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $verse = $this->Verses->patchEntity($verse, $this->request->getData());
            if ($this->Verses->save($verse)) {
                $this->Flash->success(__('The verse has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The verse could not be saved. Please, try again.'));
        }
        $this->set(compact('verse'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Verse id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $verse = $this->Verses->get($id);
        if ($this->Verses->delete($verse)) {
            $this->Flash->success(__('The verse has been deleted.'));
        } else {
            $this->Flash->error(__('The verse could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
